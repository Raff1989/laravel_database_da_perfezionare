<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{  public $eco = [
    ['id' => 1, 'image' => '/media/turtle-barrier-reef.jpg', 'habitat' => 'Oceano', 'description' => 'L oceano è l insieme delle vaste distese d acqua salata presenti sulla superficie terrestre  si tratta di un complesso unico e continuo  che circonda i continenti e le isole e che comprende la maggior parte della superficie terrestre circa il 70% della superficie totale.
      Nell oceano  inteso come complesso unico si distinguono grandi masse d acqua delimitate da continenti dette esse stesse oceani come l Atlantico il Pacifico e Indiano all interno dei quali si distinguono a loro volte distese d acqua minori dette mari dipendenti come il Mediterraneo e il Mar Rosso.
      Il termine oceano può essere usato anche in contrapposizione con mare e in questo caso l elemento discriminante sono le dimensioni  i mari sono infatti insenature marginali rispetto agli oceani e sono generalmente diversi per caratteristiche geologiche dei fondali'],
    ['id' => 2, 'image' => '/media/GettyImages-74226383.webp', 'habitat' => 'Deserto', 'description' => 'Un deserto è un ecosistema che riceve pochissima pioggia e di solito si pensa che possegga poca vita ma questo dipende dal tipo di deserto in molti la vita è abbondante la vegetazione si è adattata al basso tasso di umidità e la fauna solitamente si nasconde durante il giorno il che significa che un deserto è un ecosistema solitamente arido la sua più grande caratteristica e che quindi rende difficoltoso se non talvolta impossibile l instaurazione permanente di gruppi sociali. I deserti costituiscono una delle aree emerse più grandi del pianeta: la loro superficie totale è di 50 milioni di chilometri quadrati circa un decimo della superficie della Terra. Rappresenta il 30% delle terre emerse il 16% è costituito da deserti caldi il 14% da deserti freddi.
    Gran parte dei deserti del mondo si trovano in zone caratterizzate da alta pressione costante anticiclone cioè una condizione che non favorisce la pioggia. Tra i deserti di queste aree vi sono: il deserto del Sahara il più grande deserto caldo del pianeta Terra il Kalahari e il deserto del Namib nell Africa meridionale il Gran Deserto Sabbioso in Australia il deserto del Gobi o Chamō il Karakum il deserto di Taklamakan in Cina il Rub  al-Khali in Arabia il deserto del Negev il deserto del Mojave e il deserto di Atacama nelle Americhe solo per citarne alcuni dei più vasti.'],
    ['id' => 3, 'image' => '/media/342733.jpg', 'habitat' => 'Savana', 'description' => 'La Savana è un ambiente climatico tipico della fascia torrida ed è caratterizzata da temperature elevate e scarse precipitazioni  a differenza della foresta pluviale  altro bioma tipico della zona torrida  dove le precipitazioni sono molto frequenti e la vegetazione  conseguentemente  rigogliosa.
    Nella savana le piogge sono poche e per lo più concentrate in periodi dell anno determinati  la stagione delle piogge.
    Il paesaggio tipico della savana è quello dell erba alta e diffusa  ed in questo ambiente vivono moltissimi animali  la maggior parte erbivori come le giraffe  le gazzelle  i rinoceronti e gli elefanti ma vi sono anche animali carnivori come i leoni  gli sciacalli  le iene e gli avvoltoi.
    La savana si trova oltre le foreste pluviali  in Sud America  in Africa  in India e Indocina e in Australia.
    Il bioclima della savana non è adatto alla vita dell uomo  gli insediamenti sono pochi e per lo più abitati da tribù autoctone che vivono di caccia   allevamento e  agricoltura  che viene praticata solo in quelle zone dove l acqua è più abbondante. Il popolo dei Masai  per esempio  vive nella savana.'],
    ['id' => 4, 'image' => '/media/9479e3b8fb315b90e3fa1d6015b531fa.jpg', 'habitat' => 'Antartico', 'description' => 'L Antartide è una delle otto ecozone o regioni biogeografiche della Terra.
    Con una superficie di 14 milioni di km², ai quali si aggiungono 1,5 milioni di km² di barriere è il quarto continente del mondo per estensione. Per convenzione il confine geografico è delimitato dalla cosiddetta convergenza antartica, la latitudine circa 50° S dove si inabissano le acque di superficie subtropicali. 
    Larea compresa fra i 50° e il circolo polare antartico viene definita subantartica.
    In media è il luogo più freddo della Terra e con le maggiori riserve di acqua dolce del pianeta. Il territorio presenta la più elevata media altimetrica sul livello del mare di tutti i continenti. L Antartide è considerato un deserto, con precipitazioni annue di soli 200 mm lungo la costa, e molto meno nelle regioni interne.
    Il continente è attraversato dalla Catena Transantartica lunga 3500 km che si estende da Capo Adare Terra Vittoria affacciato sul Mare di Ross alla Terra di Coats sul Mare di Weddell.'],
];
    public function home() {
        
        return view('Homepage');
    }

    public function ecosistemi() {
       
        
        return view('EcoSistemi',['items' => $this -> eco]);
    }

    public function Detail($id) {

        $this-> eco;
        foreach($this->eco as $ecosistema){

            if ($id == $ecosistema['id'])
            {return view('detail',['ecosistema' => $ecosistema]);}
        }

     }

     public function Carnivori() {
       
        
        return view('Carnivori');
    }

    public function Erbivori() {
       
        
        return view('Erbivori');
    }
}

