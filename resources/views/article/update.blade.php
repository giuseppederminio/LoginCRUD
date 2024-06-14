<x-layout>
    <x-header title="commenta la tua serie tv"/> 

    <div class="container mt-5">
        <div class="row justify-content-center">
            
            <div class="col-8 mb-5">
                <form method="post" action="{{route('article.edit', compact('article'))}}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    {{-- il method=post può avere come figlio il put che ci permette di modificare una risorsa --}}
                    <div class="mb-3">
                        <div class="form-group">
                            <label class="form-label">Titolo serie tv</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value={{$article->title}}>
                            @error('title')
                            <div class="alert alert-danger">{{$message}}</div> 
                            {{-- il mio pc consigliava class="invalid-feedback" provalo!! --}}
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label class="form-label">Trama</label>
                          <textarea name="body" id="" cols="30" rows="10" class="form-control @error('body') is-invalid @enderror" value={{$article->body}}></textarea>
                          @error('body')
                          <div class="alert alert-danger">{{$message}}</div> 
                          @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label class="form-label">Cover</label>
                            <input type="file" class="form-control @error('img') is-invalid @enderror" name="img">
                        </div>
                    </div>    
                    <div class="mb-3">
                        <p>immagine precedente</p>
                        <img src="{{Storage::url($article->img)}}" alt="" style="height: 280px">
                    </div>              
                    <button type="submit" class="btn btn-warning">Pubblica</button>
                </form>
            </div>  
            
        </div>
    </div>
    
    
    
    
    
</x-layout>