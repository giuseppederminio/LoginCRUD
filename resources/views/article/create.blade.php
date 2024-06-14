<x-layout>
    <x-header title="commenta la tua serie tv"/> 

    <div class="container mt-5">
        <div class="row justify-content-center">
            
            <div class="col-8">
                <form method="post" action="{{route('article.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <div class="form-group">
                            <label class="form-label">Titolo serie tv</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value={{old('title')}}>
                            @error('title')
                            <div class="alert alert-danger">{{$message}}</div> 
                            {{-- il mio pc consigliava class="invalid-feedback" provalo!! --}}
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label class="form-label">Trama</label>
                          <textarea name="body" id="" cols="30" rows="10" class="form-control @error('body') is-invalid @enderror" value={{old('body')}}></textarea>
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
                    <button type="submit" class="btn btn-warning">Pubblica</button>
                </form>
            </div>  
            
        </div>
    </div>
    
    
    
    
    
</x-layout>