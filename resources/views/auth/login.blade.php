<x-layout>
    <x-header title="accedi"/>    

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
                <form method="POST" action="{{route('login')}}">
                    @csrf
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
                    <button type="submit" class="btn btn-primary">Accedi</button>
                </form>
            </div>              
        </div>
    </div>   
</x-layout>