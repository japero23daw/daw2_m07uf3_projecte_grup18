@extends('disseny')
@section('content')
<h1>Dades del cotxe</h1>
<div class="mt-5">
  <table class="table table-striped table-bordered table-hover">
	<thead class="thead-dark">
		<tr class="table-primary">
			<th scope="col">CAMP</td>
			<th scope="col">VALOR</td>
        </tr>
	</thead>
	<tbody>
		<tr>
			<td>Matricula_auto</td>
			<td>{{$dades_autos->Matricula_auto}}</td>
		</tr>
		<tr>
			<td>Bastidor</td>
			<td>{{$dades_autos->Numero_bastidor}}</td>
		</tr>
		<tr>
			<td>Marca</td>
			<td>{{$dades_autos->Marca}}</td>
		</tr>
		<tr>
			<td>Model</td>
			<td>{{$dades_autos->Model}}</td>
		</tr>
		<tr>
			<td>Color</td>
			<td>{{$dades_autos->Color}}</td>
		</tr>
		<tr>
			<td>places</td>
			<td>{{$dades_autos->Numero_places}}</td>
		</tr>
		<tr>
			<td>Portes</td>
			<td>{{$dades_autos->Numero_portes}}</td>
		</tr>
		<tr>
			<td>Tipus_combustible</td>
            <td>{{$dades_autos->Tipus_combustible == "Gasolina" ? 'Gasolina' : ($dades_autos->Tipus_combustible == "Diesel" ? 'Diesel' : 'elèctric')}}</td>
		</tr>

	</tbody>	
  </table>
  <div class="p-6 bg-white border-b border-gray-200">
	<a href="{{ url('dashboard') }}">Torna al dashboard</a>                     
  </div>
  <div class="p-6 bg-white border-b border-gray-200">
	<a href="{{ url('auto') }}">Torna a la llista</a>
  </div>
<div>
@endsection