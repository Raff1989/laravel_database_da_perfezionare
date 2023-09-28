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
            <form method="POST" action="{{route('login')}}">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">email</label>
                    <input type="email" class="form-control" name="email" >
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Accedi</button>
            </form>
            <script src="https://kit.fontawesome.com/f65e26a568.js" crossorigin="anonymous"></script>
        </body>
        </html>