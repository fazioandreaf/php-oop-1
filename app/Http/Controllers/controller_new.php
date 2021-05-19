<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// GOAL: come detto a lezione, generare nuovo controller con rotta associata; definire poi classe Movie con titolo e descrizione; definire costruttore con titolo necessario e descrizione opzionale; e metodo getString() che restituisca una stringa riportante tutte le variabili; generare poi un paio di istanze e stamparle per mezzo del dd() come visto in classe

class movie {
    public $title;
    public $description;
    public function __construct($first,$second='null'){
        $this -> title= $first;
        $this -> description= $second;
        if($second==='null'){
            $this -> description='Empty';
        }

    }
    public function get_string(){
        return $this->title.'  '.$this->description;
    }
}
class controller_new extends Controller
{
    public function oop(){
        $movie_new1= new movie('ola');
        $movie_new2= new movie('viola','georgia');
        $movie_new3= new movie('cipresso');
        $movie_new4= new movie('eolian','leromerlin');
        $arr=[$movie_new1,$movie_new2,$movie_new3,$movie_new4];
        $str='';
        foreach($arr as $a)
        $str.=$a->get_string()."\n";

        dd($str);
        // dd($movie_new, $movie_new->get_string());









        return view('pages.home');
    }
}
