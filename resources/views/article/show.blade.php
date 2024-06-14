<x-layout>
    <x-header title="dettaglio serie tv"/>      
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-6">
                <h1>{{$article->title}}</h1>
                <p class="bold">{{$article->body}}</p>
                <img src="{{Storage::url($article->img)}}" alt="">
<a href="{{route('article.update', compact('article'))}}" class="btn btn-warning">modifica</a>
<form action="{{route('article.delete',compact('article'))}}" method="POST">
    @csrf
    @method('delete') 
    {{-- metodo figlio di post --}}
    <button type="submit" class="btn btn-danger">elimina</button>
</form>
            </div>
        </div>
    </div>
</x-layout>
