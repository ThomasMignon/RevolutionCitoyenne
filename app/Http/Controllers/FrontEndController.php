<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Interview;
use App\Article;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index()
    {
        $articles = Article::all()->take(3);
        $interviews = Interview::all()->take(5);
        return view('index')->with(compact('interviews','articles'));
    }

    public function test()
    {
        $articles = Article::paginate(1);
        $interviews = Interview::all()->take(5);
        return view('test')->with(compact('interviews','articles'));
    }

    public function login()
    {
        $articles = Article::all();
        $interviews = Interview::all()->take(5);
        return view('login')->with(compact('articles','interviews'));
    }

    public function connexion()
    {
        return view('index');
    }

    public function contact(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $form_message = $request->input('message');

        $to_email = 'thomasmignontest@gmail.com';

        \Mail::send('emails.contact',
            [
                'name' => $name,
                'email' => $email,
                'subject' => $name,
                'form_message' => $form_message
            ],
            function ($message) use ($to_email) {
                $message->to($to_email,' Support')->subject('Lalallal');
            }
        );

        return redirect('/#sect4')->with(['success' => 'Votre message a bien été envoyé !']);
    }
    public function inscription(Request $request)
    {
        $users = new User;
        if($request->input('passwd') == $request->input('passwd2'))
        {
            $users->password = bcrypt($request->input('passwd'));
        }
        else
        {
            return back()->with(['success' => 'Les mots de passe ne correspondent pas !']);
        }
        $users->nom = $request->input('nom');
        $users->prenom = $request->input('prenom');
        $users->created_at = Carbon::now();
        $users->remember_token = $request->input('_token');
        $users->email = $request->input('email');
        $users->ville = $request->input('ville');
        $users->save();
        return back();
    }
}
