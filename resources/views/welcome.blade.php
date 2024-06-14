<x-layout>
    <x-header title="le tue serie preferite"/>
   
    @if (session('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
    
    @endif

    <div class="container my-5">
        <div class="row justify-content-center">
         @foreach ($articles as $article)
             <div class="col-12-col-md-4-my-2">
                <x-card
                {{-- importo tutto l'articolo all'interno del componente --}}
                :article="$article"
                {{-- va scritto "$article" perchè è una stringa e non come {{$article}} --}}
                />
             </div>
         @endforeach
        </div>
    </div>
</x-layout>
