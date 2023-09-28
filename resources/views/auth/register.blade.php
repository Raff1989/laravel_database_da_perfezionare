<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mondo animale</title>
    <link rel="icon" type="image/x-icon" href="animali_ammessi.png">
    @vite(['resources/css/app.css', 'resources/js/app.js',])
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
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
                <form method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" name="email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control"
                        id="exampleInputPassword1" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Conferma password</label>
                        <input type="password" class="form-control"
                        id="exampleInputPassword1" name="password_confirmation">
                    </div>
                    <button type="submit" class="btn btn-primary">Registrati</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/f65e26a568.js" crossorigin="anonymous"></script>
</body>
</html>