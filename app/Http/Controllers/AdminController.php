<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function dashboard()
    {
        $userRequests = User::where('role', '!=', NULL)->get();
        return view('admin-dashboard', compact('userRequests'));
    }

    public function acceptRequest(User $user, $choice)
    {
        if ($choice) {
            switch ($user->role) {
                case 'admin':
                    $user->update([
                        'is_admin' => true,
                        'role' => NULL
                    ]);
                    break;

                case 'revisor':
                    $user->update([
                        'is_revisor' => true,
                        'role' => NULL
                    ]);
                    break;

                case 'writer':
                    $user->update([
                        'is_writer' => true,
                        'role' => NULL
                    ]);
                    break;

                default:
                    break;
            }
        } else {
            switch ($user->role) {
                case 'admin':
                    $user->update([
                        'role' => NULL
                    ]);
                    break;

                case 'revisor':
                    $user->update([
                        'role' => NULL
                    ]);
                    break;

                case 'writer':
                    $user->update([
                        'role' => NULL
                    ]);
                    break;

                default:
                    break;
            }
        }

        return redirect()->back();
    }

    public function updateTag(Request $request, Tag $tag)
    {
        if ($request->tag) {
            $tag->update(['name' => $request->tag]);

            return redirect()->back()->with('messageUpdateTag', 'Tag modificato con successo');
        }

        return redirect()->back()->with('messageErrorTag', 'Inserire un input valido');
    }

    public function destroyTag(Tag $tag)
    {
        $tag->articles()->detach();
        $tag->delete();

        return redirect()->back()->with('messageDeleteTag', 'Tag eliminato con successo');
    }

    public function updateCategory(Request $request, Category $category)
    {
        if ($request->category) {
            $category->update(['name' => $request->category]);

            return redirect()->back()->with('messageUpdateCategory', 'Categoria modificata con successo');
        }

        return redirect()->back()->with('messageErrorCategory', 'Inserire un input valido');
    }

    public function destroyCategory(Category $category)
    {
        $category->articles()->detach();
        $category->delete();

        return redirect()->back()->with('messageDeleteCategory', 'Categoria eliminata con successo');
    }
}
