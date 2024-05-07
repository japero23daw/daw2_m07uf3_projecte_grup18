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
			<td>Dni_client</td>
			<td>{{$dades_llogas->Dni_client}}</td>
		</tr>
		<tr>
			<td>Matricula</td>
			<td>{{$dades_llogas->Matricula_auto}}</td>
		</tr>
		<tr>
			<td>Data prestec</td>
			<td>{{$dades_llogas->Data_prestec}}</td>
		</tr>
		<tr>
			<td>Data devolucio</td>
			<td>{{$dades_llogas->Data_devolucio}}</td>
		</tr>
		<tr>
			<td>Lloc devolucio</td>
			<td>{{$dades_llogas->Lloc_Devolucio}}</td>
		</tr>
		<tr>
			<td>Preu per dia</td>
			<td>{{$dades_llogas->Preu_dia}}</td>
		</tr>
		<tr>
			<td>Prestec deposit ple?</td>
			<td>{{$dades_llogas->Prestec_deposit_ple == "1" ? 'Sí':'No'}}</td>
		</tr>
        <tr>
			<td>Tipus_dassegurança</td>
			<td>{{$dades_llogas->Tipus_dassegurança}}</td>
		</tr>

	</tbody>	
  </table>
  <div class="p-6 bg-white border-b border-gray-200">
	<a href="{{ url('dashboard') }}">Torna al dashboard</a>                     
  </div>
  <div class="p-6 bg-white border-b border-gray-200">
	<a href="{{ url('llog') }}">Torna a la llista</a>
  </div>
<div>
@endsection