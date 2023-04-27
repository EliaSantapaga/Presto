<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\RoleMail;
use App\Models\Article;
use App\Models\Contact;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\RoleRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function homepage()
    {
        return view('welcome');
    }


    public function about()
    {
        $members = [
            ['name' => 'Elia', 'surname' => 'Santapaga', 'age' => 23, 'role' => 'Programmatore Frontend', 'img' => '/img/Lagger P2 - Sfondo trasparente.png'],
            ['name' => 'Jimmy', 'surname' => 'Santapaga', 'age' => 24, 'role' => 'Programmatore Backend', 'img' => '/img/Elia Rayquaza - Sfondo trasparente.png']
        ];

        return view('about', compact('members'));
    }


    public function services()
    {
        $services = [
            ["id" => 1, "img" => "./img/Ori and the Blind Forest.jpg", "name" => "Ori and the Blind Forest", "category" => "Metroidvania", "price" => 4.99],
            ["id" => 2, "img" => "./img/Ori and the Will of the Wisps.jpg", "name" => "Ori and the Will of the Whisps", "category" => "Metroidvania", "price" => 29.99],
            ["id" => 3, "img" => "./img/Hollow Knight.jpg", "name" => "Hollow Knight", "category" => "Metroidvania", "price" => 14.99],
            ["id" => 4, "img" => "./img/Hollow Knight - Gods and Nightmares.jpg", "name" => "Hollow Knight - Gods & Nightmares", "category" => "Metroidvania", "price" => 3.99],
            ["id" => 5, "img" => "./img/Dead Cells.jpg", "name" => "Dead Cells", "category" => "Metroidvania", "price" => 14.99],
            ["id" => 6, "img" => "./img/Stray.jpg", "name" => "Stray", "category" => "Avventura", "price" => 26.99],
            ["id" => 7, "img" => "./img/Sekiro.jpg", "name" => "Sekiro: Shadow Die Twice", "category" => "Avventura", "price" => 59.99],
            ["id" => 8, "img" => "./img/NieR Automata.jpeg", "name" => "NieR: Automata", "category" => "Gioco di Ruolo (GDR)", "price" => 39.99],
            ["id" => 9, "img" => "./img/Nier Replicant.jpeg", "name" => "NieR Replicant", "category" => "Gioco di Ruolo (GDR)", "price" => 59.99],
            ["id" => 10, "img" => "./img/Black Ops III.jpg", "name" => "Call of Duty: Black Ops III", "category" => "First Person Shooter (FPS)", "price" => 59.99],
            ["id" => 11, "img" => "./img/Horizon Zero Dawn.jpg", "name" => "Horizon Zero Dawn", "category" => "Avventura", "price" => 49.99],
            ["id" => 12, "img" => "./img/Half-Life Alyx.jpg", "name" => "Half-Life: Alyx", "category" => "First Person Shooter (FPS)", "price" => 49.99],
            ["id" => 13, "img" => "./img/Elden Ring.jpg", "name" => "ELDEN RING", "category" => "Gioco di Ruolo (GDR)", "price" => 59.99],
            ["id" => 14, "img" => "./img/Black Desert.jpg", "name" => "Black Desert", "category" => "Gioco di Ruolo (GDR)", "price" => 9.99],
            ["id" => 15, "img" => "./img/Cyberpunk 2077.jpg", "name" => "Cyberpunk 2077", "category" => "Gioco di Ruolo (GDR)", "price" => 59.99],
            ["id" => 16, "img" => "./img/It Takes Two.jpg", "name" => "It Takes Two", "category" => "Rompicapo", "price" => 39.99],
            ["id" => 17, "img" => "./img/Red Dead Redemption II.jpg", "name" => "Red Dead Redemption II", "category" => "Azione", "price" => 59.99],
            ["id" => 18, "img" => "./img/Little Nightmares.jpeg", "name" => "Little Nightmares", "category" => "Rompicapo", "price" => 19.99],
            ["id" => 19, "img" => "./img/Portal 2.jpg", "name" => "Portal 2", "category" => "Rompicapo", "price" => 8.19],
            ["id" => 20, "img" => "./img/Cube Escape Collection.jpg", "name" => "Cube Escape Collection", "category" => "Rompicapo", "price" => 3.99],
            ["id" => 21, "img" => "./img/Euro Truck Simulator 2.jpg", "name" => "Euro Truck Simulator 2", "category" => "Simulazione", "price" => 19.99],
            ["id" => 22, "img" => "./img/The Binding of Isaac Repentance.jpg", "name" => "The Binding of Isaac: Repentance", "category" => "Azione", "price" => 49.99],
            ["id" => 23, "img" => "./img/Flight Simulator.jpg", "name" => "Flight Simulator", "category" => "Simulazione", "price" => 69.99],
            ["id" => 24, "img" => "./img/Fifa 22.jpg", "name" => "Fifa 22", "category" => "Sport", "price" => 9.59],
            ["id" => 25, "img" => "./img/Forza Horizon V.jpg", "name" => "Forza Horizon 5", "category" => "Sport", "price" => 59.99],
            ["id" => 26, "img" => "./img/MotoGP22.jpg", "name" => "MotoGP 22", "category" => "Sport", "price" => 49.99],
            ["id" => 27, "img" => "./img/Mortal Kombat 11 Ultimate.jpg", "name" => "Mortal Kombat 11: Ultimate", "category" => "Picchiaduro", "price" => 9.99],
            ["id" => 28, "img" => "./img/Street Fighter V.jpg", "name" => "Street Fighter V", "category" => "Picchiaduro", "price" => 4.99],
            ["id" => 29, "img" => "./img/Tekken 7.jpg", "name" => "TEKKEN 7", "category" => "Picchiaduro", "price" => 39.99],
            ["id" => 30, "img" => "./img/GTAV.jpg", "name" => "Grand Theft Auto V", "category" => "Azione", "price" => 14.98],
            ["id" => 31, "img" => "./img/Monster Hunter World.jpg", "name" => "Monster Hunter: World", "category" => "Avventura", "price" => 29.99],
            ["id" => 32, "img" => "./img/Rainbow Six Siege.jpg", "name" => "Tom Clancy's Rainbow Six Siege", "category" => "First Person Shooter (FPS)", "price" => 19.99]
        ];

        return view('services', compact('services'));
    }


    public function contacts()
    {
        return view('contacts');
    }


    // function contactsSubmit(Request $request)
    // {
    //     // Mass Assignment
    //     $contact = Contact::create([
    //         'name' => $request->input('name'),
    //         'email' => $request->input('email'),
    //         'tel' => $request->input('tel')
    //     ]);

    //     Mail::to($contact->email)->send(new ContactMail($contact));

    //     return redirect(route('homepage'))->with('message', 'I tuoi dati sono stati inviati, grazie!');
    // }


    public function blog()
    {
        $articles = Article::where('is_published', true)->orderByDesc('created_at')->get();
        // $articles = Article::orderBy('created_at', DESC)->take(1000)->get();
        return view('blog', compact('articles'));
    }


    public function articleDetail(Article $article)
    {
        return view('article.detail', compact('article'));
    }


    public function workWithUs()
    {
        return view('work-with-us');
    }


    public function workWithUsSubmit(RoleRequest $req)
    {
        $user = User::where('email', $req->email)->first();

        if ($user) {
            $contact = new Contact;
            $contact->name = $req->userName;
            $contact->role = $req->role;
            $contact->email = $req->email;
            $contact->message = $req->message;

            Mail::to('info@presto.it')->send(new RoleMail($contact));

            $user->role = $req->role;
            $user->update();
        } else {
            return redirect(route('register'));
        }

        return redirect(route('blog'))->with('message', 'Grazie per la tua richiesta, ti risponderemo a breve.');
    }


    public function searchArticle(Request $request)
    {
        $search = $request->search;
        $articles = Article::search($search)->where('is_published', true)->orderBy('created_at', 'desc')->get();

        return view('search-index', compact('articles', 'search'));
    }


    public function categoryArticles(Category $category)
    {
        $articles = $category->articles()->orderByDesc('created_at')->get();

        return view('category-articles', compact('category', 'articles'));
    }

    public function userArticles(User $user)
    {
        $articles = $user->articles()->orderByDesc('created_at')->get();
        
        return view('user-articles', compact('articles'));
    }
}