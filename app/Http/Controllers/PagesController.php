<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function articles () 
    //quando inseriamo un metodo la graffa a capo
    {
        $articoli = [
            ['titolo' => 'Camminare il mondo', 'categoria' => 'Cammino', 'descrizione' => '100 giorni di cammino in Europa'],
            ['titolo' => 'Viaggiare in autostop', 'categoria' => 'Autostop', 'descrizione' => 'Guida pratica'],
            ['titolo' => 'Mete calde invernali', 'categoria' => 'Esplorazione', 'descrizione' => 'viaggio alle Maldive'],
        ];
        
        return view('pages.articoli', ['articoli' => $articoli]); 
        
        /* dump and die stampa il contenuto della variabile/i, passata nell'argomento ed interrompe l'esecuzione del codice */
//dd($this->articles();
    }

    public function article ($articolo) 
    {

        $index = $articolo;

        $articoli = [
            ['titolo' => 'Camminare il mondo', 'categoria' => 'Cammino', 'descrizione' => '100 giorni di cammino in Europa'],
            ['titolo' => 'Viaggiare in autostop', 'categoria' => 'Autostop', 'descrizione' => 'Guida pratica'],
            ['titolo' => 'Mete calde invernali', 'categoria' => 'Esplorazione', 'descrizione' => 'viaggio alle Maldive'],
        ];
    
    if(array_key_exists($index, $articoli)) {
        return view ('pages.articolo', ['articolo' => $articoli[$index]]);
    } else {
        abort(404);
    }
    }


    public function contacts ()
    {
        return view('pages.contatti');
    }

public function about ()
{
    return view ('pages.chisono', [
        'title' => 'Ciao',
        'description' => 'mi chiamo Alberto <br> sono nato a Catania <br> ho 35 anni', 
        // 'list' => $list,
    ]);
}


}


