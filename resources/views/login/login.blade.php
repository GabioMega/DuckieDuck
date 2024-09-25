<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
</head>
<body>
    <header class="header">
        <nav class="navbar">
            <input type="checkbox" id="check">
            <ul>
                <li><a href="{{url('')}}">Home</a></li>
            </ul>
          </nav>
          <section></section>
    </header>

    <div class="background">
        <div class="right">
            <div class="title">
                <h2>LOGIN</h2>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('register.Verif') }}" method="POST">
                @csrf
                <input type="email" name="email" id="email" value="{{ old('email') }}" required placeholder="Email">
                <input type="password" name="password" id="password" required placeholder="Password">
                <button type="submit">Login</button>
                <h2>Don't have an account yet? <a href="{{url("register")}}">Sign Up</a></h2>
            </form>

        </div>
    </div>
</body>
</html>
