<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRequest;
use App\Http\Requests\UpdateRequest;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('writer');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $article = Auth::user()->articles()->create([
            'title' => $request->title,
            'author' => $request->author,
            'img' => $request->file('img')->store('public/img'),
            'description' => $request->description,
        ]);


        $tags = explode(',', $request->tags);

        for ($i = 0; $i < count($tags); $i++) {
            $tags[$i] = trim($tags[$i], " ");
        }

        foreach ($tags as $tag) {
            $article->tags()->create(['name' => $tag]);
        }

        $article->categories()->attach($request->categories);

        return redirect(route('blog'))->with('message', 'Il tuo articolo è stato creato correttamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Article $article)
    {
        $article->update([
            'title' => $request->input('title'),
            'author' => $request->input('author'),
            'img' => $request->img ? $request->file('img')->store('public/img') : $article->img,
            'description' => $request->input('description'),
        ]);

        $article->categories()->detach();
        $article->categories()->attach($request->categories);

        $tags = explode(',', $request->tags);
        $article->tags()->detach();
        $article->tags()->delete();

        foreach ($tags as &$tag) {
            $tag = trim($tag);
            if ($tag == '') {
                break;
            }
            $article->tags()->updateOrCreate(['name' => $tag]);
        }

        return redirect(route('article.detail', compact('article')))->with('message', 'Il tuo articolo è stato modificato correttamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->categories()->detach();
        $article->tags()->detach();
        $article->delete();

        return redirect(route('blog'))->with('message', 'Il tuo articolo è stato eliminato correttamente.');
    }
}
