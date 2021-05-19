<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// GOAL: come detto a lezione, generare nuovo controller con rotta associata; definire poi classe Movie con titolo e descrizione; definire costruttore con titolo necessario e descrizione opzionale; e metodo getString() che restituisca una stringa riportante tutte le variabili; generare poi un paio di istanze e stamparle per mezzo del dd() come visto in classe

class movie {
    public $title;
    public $description;
    public function __construct($first,$second){
        $this -> title= $first;
        $this -> description= $second;
    }
}
class controller_new extends Controller
{
    public function oop(){
        $movie_new= new movie('ciao','ola');
        dd($movie_new);









        return view('pages.home');
    }
}
