@extends('plantillas.navbar')
@section('principal')
    <h1>Informació del llibre</h1>
    <div>
        Identificador: {{ $llibre->id }} <br />
        Títol: {{ $llibre->titol }} <br />
        ISBN: {{ $llibre->ISBN }} <br />
        Autor: {{ $llibre->autor }} <br />
        Genere: {{ $llibre->genere }} <br />
        Disponible: 
            <?php
                $dispo = ($llibre->disponible);
                $dispo = ($dispo) ?  "disponible" :  "no disponible";
                echo $dispo;
            ?>
        <br />
    
    </div>
@endsection