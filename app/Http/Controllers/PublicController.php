<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function home () {
        $articles=Article::all();
        return view('welcome',compact('articles'));
    }
    public function contact(){
        return view('contact');
    }
    public function submit(Request $request){
        // dd($request->all());
        //come al solito vedo se mi arrivano i dati della Request
        $message = $request->message;
        $name = Auth::user()->name;
        $date = compact('message','name');
        //qui creo un array con i dati ricevuti
        //mi serve per far arrivare name e message all'interno della mia email
        Mail::to(Auth::user()->email)->send(new ContactMail($date));
        //importo le classi Auth, Mail e ContactMail
        //dd('controlla la tua mail');
        return redirect()->route('home')->with('message','Grazie per averci contattato');
    }
}
