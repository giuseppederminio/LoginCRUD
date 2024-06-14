<x-layout>
    <x-header title="registrati"/>
    

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>    
    @endif




    <div class="container mt-5">
        <div class="row justify-content-center">
            
            <div class="col-8">
                <form method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="mb-3">
                        <div class="form-group">
                            <label class="form-label">User Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label class="form-label">User Email</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label class="form-label">Conferma Password</label>
                            <input type="password" class="form-control" name="password_confirmation">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Registrati</button>
                </form>
            </div>  
            
        </div>
    </div>
    
    
    
    
    
</x-layout>