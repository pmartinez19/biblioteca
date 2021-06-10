<?php

namespace App\Http\Controllers;
use App\Models\llibres;
use Illuminate\Http\Request;

class LlibresController extends Controller
{
    public function llista(){
        $listado=llibres::all();
        //var_dump($listado);
        return view("llista", array("exemplars" =>$listado));
    }
    public function consulta($id){
        $exemplar = llibres::where('id',1)->get();
        return view('llibre', array('llibre'=>$exemplar[0]));
    }

}
