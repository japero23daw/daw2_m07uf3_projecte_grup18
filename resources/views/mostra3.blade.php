@extends('disseny')
@section('content')
<h1>Dades del client</h1>
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
			<td>Dni_client</td>
			<td>{{$dades_clients->Dni_client}}</td>
		</tr>
		<tr>
			<td>Nom i cognoms</td>
			<td>{{$dades_clients->Nom_i_cognoms}}</td>
		</tr>
		<tr>
			<td>Telèfon</td>
			<td>{{$dades_clients->Telèfon}}</td>
		</tr>
		<tr>
			<td>Adreça</td>
			<td>{{$dades_clients->Adreça}}</td>
		</tr>
		<tr>
			<td>Ciutat</td>
			<td>{{$dades_clients->Ciutat}}</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>{{$dades_clients->Email}}</td>
		</tr>
		<tr>
			<td>Número_del_permís_de_conducció</td>
			<td>{{$dades_clients->Número_del_permís_de_conducció}}</td>
		</tr>
        <tr>
			<td>Número_del_permís_de_conducció</td>
			<td>{{$dades_clients->Número_del_permís_de_conducció}}</td>
		</tr>
		<tr>
			<td>Tipus de targeta</td>
			<td>{{$dades_clients->Tipus_de_targeta == "Dèbit" ? 'Dèbit':'Crèdit'}}</td>
		</tr>
        <tr>
			<td>Número targeta</td>
			<td>{{$dades_clients->Número_targeta}}</td>
		</tr>

	</tbody>	
  </table>
  <div class="p-6 bg-white border-b border-gray-200">
	<a href="{{ url('dashboard') }}">Torna al dashboard</a>                     
  </div>
  <div class="p-6 bg-white border-b border-gray-200">
	<a href="{{ url('client') }}">Torna a la llista</a>
  </div>
<div>
@endsection