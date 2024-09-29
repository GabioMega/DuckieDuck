<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="{{asset('css/signup.css')}}">
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

    <div class="background" style="background-image: url('{{ asset('assets/groupducks.jpg') }}');">
        <div class="right">
            <div class="title">
                <h2>REGISTER</h2>
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

            <form action="{{ route('register.store')}}" method="POST" onsubmit="return formValidation(event)">
                @csrf

                <input type="text" id="username" name="name" placeholder="User Name" required>
                <input type="email" id="email" name="email" placeholder="Email" required>
                <input type="password" id="password" name="password" placeholder="Password" required>
                <input type="password" id="cfpassword" name="cfpassword" placeholder="Confirm Password" required>

                <div class="agree">
                    <p>By registering, you agree to our terms and conditions</p>
                </div>
                <button type="submit">REGISTER</button>
                <h2>Already have an account? <a href="{{ url('login')}}">Login here</a></h2>
            </form>
        </div>
    </div>

    <script>
        function formValidation(event) {
            event.preventDefault();

            const password = document.getElementById('password').value;
            const cfpassword = document.getElementById('cfpassword').value;

            if (password !== cfpassword) {
                alert('Passwords do not match.');
                return false;
            }

            event.target.submit();
        }
    </script>
</body>
</html>
