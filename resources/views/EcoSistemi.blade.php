<x-layout>
      <body class="bg">
        <x-nav></x-nav>
        <main>
            <h2>Ecosistema</h2>
            <div class="row mx-auto justify-content-space-around">
                @foreach ($items as $item)
                    <div class="col-3">
                        <a href="{{ route ('Detail', ['id' => $item['id']])}}">
                            <div class="card ">
                                <h5>{{$item['habitat']}}</h5>
                                 <img class="img-fluid" src="{{$item['image']}}">
                                 <p>scopri di più</p>
                              </div>
                            </a>
                        </div>
                @endforeach
            </div>
            <div>
                <p>Un ecosistema è un insieme naturale formato da una comunità di organismi viventi e dall'ambiente fisico nel quale essi vivono. È costituito da due componenti in stretta relazione: la prima rappresentata dagli organismi viventi e l'altra dall'ambiente fisico in cui essi vivono. Come tale l'ecosistema è una porzione dell'ecosfera e quindi della biosfera.</p>
            </div>
        </main>
        {{-- init-footer --}}
    <footer class="foot">
        <p>&copy; 2023 Il Mio Sito Web. Tutti i diritti riservati.</p>
    </footer>  
    {{-- end-footer  --}}
    <script src="https://kit.fontawesome.com/f65e26a568.js" crossorigin="anonymous"></script>
      </body>  
        
    </x-layout>
    
