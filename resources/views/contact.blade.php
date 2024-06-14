<x-layout>
    <x-header title="Scrivici un Messaggio"/> 
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-8">
                <form method="post" action="{{route('contact.submit')}}">
             
                    @csrf
                    <div class="mb-3">
                        <div class="form-group">
                            <label class="form-label">Message</label>
                            <input type="text" class="form-control" name="message">                        
                        </div>
                    </div>                            
                    <button type="submit" class="btn btn-warning">contattaci</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>