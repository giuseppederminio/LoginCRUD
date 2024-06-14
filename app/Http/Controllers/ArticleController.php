<?php

namespace App\Http\Controllers;



use App\Models\Article;
// the class below is from ai method store
// use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;

 class ArticleController extends Controller
 {
    
    public function __construct()
    {
        $this->middleware('auth');
        
    }
    public function create(){
        return view('article/create');
    }
    public function store (ArticleRequest $request){
//         echo $request;
//         Article::create($request->all());
//     return redirect('/home');
       
        // dd($request->all());
        // $record = new Article();
        // $validatedData = $request->validated();
        // code from teacher:
         Article::create([
        
            'title'=> $request->input('title'), 
            'body'=> $request->input('body'),
            'img'=> $request ->has('img') ? $request->file('img')->store('public') : '/img/default.jpg',
        
         ]);

         return redirect(route('home'))->with('message','serie tv inserita con successo');
       // stop code from teacher
        //devo iserire ora nella home il (session message)
        //code from blackbox:
        
    //     $validatedData = $request->validated();
        
    //     $article = Article::create([
    //         'title' => $validatedData['title'],
    //         'body' => $validatedData['body'],
    //         'img' => $request->has('img')
    //         ? $request->file('img')->storeAs('public', Str::uuid() . '.' . $request->file('img')->getClientOriginalExtension())
    //         : '/img/default.jpg',
    //     ]);
        
    //     return redirect(route('home'))->with('message', 'Article created successfully!');
        
//     }
    
//     public function show(Article $article){
//         return view('article/show',compact('article'));
//     }
//     public function update(Article $article){
//         //dd($article);
//         return view('article/update', compact('article'));
//     }
    
    
 }
public function edit(Request $request, Article $article){
    //inserisco sia la classe Request che la classe Article
    //ricordati che la request serve a fare una richiesta dei dati da parte del client(posso personalizzare la richiesta come visto prima)
    //la classe Article serve a prendere il $article CHE che voglio modificare
    //dd($request->all(),$article);
    //sto chiedendo di vedere, dopo avere modificato l'articolo e fatto submit, tutte le request, ovvero le modifiche che ho fatto e l'articolo in questione.
   $article->title = $request->title;
   $article->body = $request->body;
   $article->img  = $request->has('img') ? $request->file('img')->store('public') : $article->img; //se esiste un file img, lo salvo, altrimenti lascio l'img precedente!
   // il tipo di scrittura sopra da due possibili valori al punto interrogativo ovvero true o false
   $article->save();  
   //salvo le modifiche, non ho creato una nuova istaqnza bensì aggiornato una vecchia
   return redirect(route('home'))->with('message','articolo modificato con successo');

}

// sneha
// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\Article;
// use App\Http\Requests\ArticleRequest;

// class ArticleController extends Controller
// {


//     public function create()
//     {
//         return view('articles.create');
//     }
//     public function store(ArticleRequest $request)
//     {
//         $validatedData = $request->validated();
      
//         Article::create([
//             'title' => $validatedData['title'],
//             'body' => $validatedData['body'],
//         ]);

//         return redirect()->route('articles.index')->with('success', 'Article created successfully.');
//     }
}