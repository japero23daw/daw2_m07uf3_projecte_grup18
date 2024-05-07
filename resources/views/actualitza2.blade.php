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
        <form method="post" action="{{ route('auto.update', $dades_autos->autos) }}">
			@csrf
            @method('PATCH')
            <div class="form-group">           
				<label for="Matricula_auto">Matricula</label>
				<input type="text" class="form-control" name="Matricula_auto" value="{{ $dades_autos->Matricula_auto }}" />
			</div>
			<div class="form-group">           
				<label for="Numero_bastidor">Bastidor</label>
				<input type="text" class="form-control" name="Numero_bastidor" value="{{ $dades_autos->Numero_bastidor }}"/>
			</div>
			<div class="form-group">           
				<label for="Marca">Marca</label>
				<input type="text" class="form-control" name="Marca" value="{{ $dades_autos->Marca }}"/>
			</div>
			<div class="form-group">           
				<label for="Model">Model</label>
				<input type="text" class="form-control" name="Model" value="{{ $dades_autos->Model }}"/>
			</div>
            <div class="form-group">           
                <label for="Color">Color</label>
                <input type="text" class="form-control" name="Color"  value="{{ $dades_autos->Color }}"/>
            </div>
            <div class="form-group">           
                <label for="Numero_places">Places</label>
                <input type="text" class="form-control" name="Numero_places"  value="{{ $dades_autos->Numero_places }}"/>
            </div>     
            <div class="form-group">           
                <label for="Numero_portes">Portes</label>
                <input type="text" class="form-control" name="Numero_portes"  value="{{ $dades_autos->Numero_portes }}"/>
            </div>     
			<div class="form-group">           
				<label for="Tipus_combustible">Combustible</label>
				<select name="Tipus_combustible">					
					<option value="Gasolina" {{ $dades_autos->Tipus_combustible == "Gasolina" ? 'selected' : ''}}>Gasolina</option>
					<option value="Diesel" {{ $dades_autos->Tipus_combustible == "Diesel" ? 'selected' : ''}}>Diesel</option>
                    <option value="elèctric" {{ $dades_autos->Tipus_combustible == "elèctric" ? 'selected' : ''}}>elèctric</option>					    
				</select>
			</div>

			<button type="submit" class="btn btn-block btn-primary">Envia</button>
        </form>
    </div>
</div>
<br><a href="{{ url('auto') }}">Accés directe a la Llista de cotxes</a
@endsection