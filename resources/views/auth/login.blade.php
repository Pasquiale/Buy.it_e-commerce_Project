<x-layout>
    <div class="login">

        <div class="container h-100 ">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-md-6">

                    <h1>Accedi</h1>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('login') }}" method="POST">
                        @csrf


                        <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input name="email" type="email" class="form-control" id="email"
                                aria-describedby="email" value="{{ old('email') }}">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password:</label>
                            <input name="password" type="password" class="form-control" id="password">
                        </div>
                        <div>
                            
                        </div>

                        <div>
                            <input name="remember" type="checkbox" id="check">
                            <label for="check">Ricordati di me</label>
                        </div>

                        <div class="mt-3">

                            <button type="submit" class="btn btn-primary">Accedi</button>
                            <p class="small">Non ti sei ancora registrato? <a href="{{ route('register') }}">Clicca
                                    qui!</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</x-layout>
