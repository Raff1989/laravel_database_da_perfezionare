<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Mondo Animale</title>
  <link rel="icon" type="image/x-icon" href="animali_ammessi.png">
  @vite(['resources/css/app.css', 'resources/js/app.js',])
</head>
<body class="bd">
  <x-nav></x-nav>
  <div class="container-fluid position-relative">
    <div class="row justify-content-center align-item-center">
      <div class="col-12 p-0">
        <img class="img-detail img-fluid" src="{{$ecosistema['image']}}" alt=""  alt="">
        </div>
    </div>
</div>
<main>
  <h1>{{$ecosistema['habitat']}}</h1>
  {{$ecosistema['description']}}
</main>


{{-- init-footer --}}
       <footer class="foot">
        <p>&copy; 2023 Il Mio Sito Web. Tutti i diritti riservati.</p>
    </footer>  
    {{-- end-footer  --}}
    <script src="https://kit.fontawesome.com/f65e26a568.js" crossorigin="anonymous"></script>
</body>
</html>