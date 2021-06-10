@extends('plantillas.navbar')
@section('principal')
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Títol</th>
        <th scope="col">Caracteristiques</th>
        <th scope="col">Prestec</th>
        
      </tr>
    </thead>
    <tbody>
        <?php
            foreach ($exemplars as $key ) {
                echo "<tr>";
                echo "<td scope='row'>" .$key->id."</td>";
                
                echo "<td>" .$key->titol."</td>";
                echo "<td><a href='/consulta/".$key->id. "'>Detalls</a></td>";
                echo "<td><a href='/reserva/".$key->id. "'>Agafa'm</a></td>";
                echo "</tr>";
            }
        ?>
    </tbody>
  </table>
@endsection