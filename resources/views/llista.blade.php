@extends('plantillas.navbar')
@section('principal')
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Títol</th>
        
      </tr>
    </thead>
    <tbody>
        <?php
            foreach ($exemplars as $key ) {
                echo "<tr>";
                echo "<td scope='row'>" .$key->id."</td>";
                
                echo "<td>" .$key->titol."</td>";
                echo "</tr>";
            }
        ?>
    </tbody>
  </table>
@endsection