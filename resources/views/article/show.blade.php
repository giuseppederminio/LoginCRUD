<x-layout>
    <x-header title="dettaglio serie tv"/>      
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-6">
                <h1>{{$article->title}}</h1>
                <p class="bold">{{$article->body}}</p>
                <img src="{{Storage::url($article->img)}}" alt="">
<a href="{{route('article.update', compact('article'))}}" class="btn btn-warning">
modifica
</a>
            </div>
        </div>
    </div>
</x-layout>
