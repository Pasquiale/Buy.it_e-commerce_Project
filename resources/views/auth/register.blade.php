<x-layout>
    <div class="register">

        <div class="container h-100 ">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-md-6">

                <h1>Registrati</h1>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif



                <form action="{{ route('register') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="username" class="form-label">Username:
                        </label>
                        <input name="name" type="text" class="form-control" id="username" aria-describedby="username" value="{{old('name')}}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input name="email" type="email" class="form-control" id="email" aria-describedby="email" value="{{old('email')}}">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input name="password" type="password" class="form-control" id="password">
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Conferma Password:</label>
                        <input name="password_confirmation" type="password_confirmation" class="form-control" id="password_confirmation">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Registrati</button>
                        <p class="small">Già registrato? <a href="{{route('login')}}">Clicca qui!</a></p>

                    </div>
                </form>
            </div>
        </div>
    </div>


</x-layout>
