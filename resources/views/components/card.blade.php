<div class="card" style="width: 18rem;">
    <img class="card-img-top" src="{{Storage::url($article->img)}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{$article->title}}</h5>
      <a href="{{route('article.show',compact('article'))}}" class="btn btn-primary">Dettaglio</a>
    </div>
  </div>