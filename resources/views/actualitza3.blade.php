@extends('disseny')
@section('content')
<div class="card mt-5">
    <div class="card-header">
        Actualització de dades
    </div>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="post" action="{{ route('client.update', $dades_client->client) }}">
			@csrf
            @method('PATCH')
            <div class="form-group">           
				<label for="Dni_client">Dni</label>
				<input type="text" class="form-control" name="Dni_client" value="{{ $dades_client->Dni_client }}" />
			</div>
			<div class="form-group">           
				<label for="Nom_i_cognoms">Nom i cognoms</label>
				<input type="text" class="form-control" name="Nom_i_cognoms" value="{{ $dades_client->Nom_i_cognoms }}"/>
			</div>
			<div class="form-group">           
				<label for="Telèfon">Telèfon</label>
				<input type="tel" class="form-control" name="Telèfon" value="{{ $dades_client->Telèfon }}"/>
			</div>
			<div class="form-group">           
				<label for="Adreça">Adreça</label>
				<input type="text" class="form-control" name="Adreça" value="{{ $dades_client->Adreça }}"/>
			</div>
            <div class="form-group">           
                <label for="Ciutat">Ciutat</label>
                <input type="text" class="form-control" name="Ciutat"  value="{{ $dades_client->Ciutat }}"/>
            </div>
            <div class="form-group">           
                <label for="Email">Email</label>
                <input type="text" class="form-control" name="Email"  value="{{ $dades_client->Email }}"/>
            </div>     
            <div class="form-group">           
                <label for="Número_del_permís_de_conducció">Numero permis de conduir</label>
                <input type="text" class="form-control" name="Número_del_permís_de_conducció"  value="{{ $dades_client->Número_del_permís_de_conducció }}"/>
            </div>
            <div class="form-group">           
                <label for="Punts_del_permís_de_conducció">Punts del permís</label>
                <input type="text" class="form-control" name="Punts_del_permís_de_conducció"  value="{{ $dades_client->Número_del_permís_de_conducció }}"/>
            </div>          
			<div class="form-group">           
				<label for="Tipus_de_targeta">Tipus de Tarjeta</label>
				<select name="Tipus_de_targeta">					
					<option value="Dèbit" {{ $dades_client->Tipus_de_targeta == "Dèbit" ? 'selected' : ''}}>Dèbit</option>
					<option value="Crèdit" {{ $dades_client->Tipus_de_targeta == "Crèdit" ? 'selected' : ''}}>Crèdit</option>
				</select>
			</div>

			<button type="submit" class="btn btn-block btn-primary">Envia</button>
        </form>
    </div>
</div>
<br><a href="{{ url('client') }}">Accés directe a la Llista de client</a
@endsection