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
        <form method="post" action="{{ route('lloga.update', $dades_llogas->lloga) }}">
			@csrf
            @method('PATCH')
            <div class="form-group">           
				<label for="Matricula_auto">Matricula</label>
				<input type="text" class="form-control" name="Matricula_auto" value="{{ $dades_llogas->Matricula_auto }}" />
			</div>
            <div class="form-group">           
				<label for="Dni_client">Dni Client</label>
				<input type="text" class="form-control" name="Dni_client" value="{{ $dades_llogas->Dni_client }}" />
			</div>
			<div class="form-group">           
				<label for="Data_prestec">Data de prestec</label>
				<input type="date" class="form-control" name="Data_prestec" value="{{ $dades_llogas->Data_prestec }}"/>
			</div>
			<div class="form-group">           
				<label for="Data_devolucio">Data de devolucio</label>
				<input type="date" class="form-control" name="Data_devolucio" value="{{ $dades_llogas->Data_devolucio }}"/>
			</div>
			<div class="form-group">           
				<label for="Lloc_devolucio">Lloc devolucio</label>
				<input type="text" class="form-control" name="Lloc_devolucio" value="{{ $dades_llogas->Lloc_devolucio }}"/>
			</div>
            <div class="form-group">           
                <label for="Preu_dia">Preu per dia</label>
                <input type="text" class="form-control" name="Preu_dia"  value="{{ $dades_llogas->Preu_dia }}"/>
            </div>        
			<div class="form-group">           
				<label for="Prestec_deposit_ple">Deposit ple?</label>
				<select name="Prestec_deposit_ple">					
					<option value="1" {{ $dades_llogas->Prestec_deposit_ple == "Si" ? 'selected' : ''}}>Si</option>
					<option value="0" {{ $dades_llogas->Prestec_deposit_ple == "No" ? 'selected' : ''}}>No</option>
				</select>
			</div>

			<button type="submit" class="btn btn-block btn-primary">Envia</button>
        </form>
    </div>
</div>
<br><a href="{{ url('llog') }}">Accés directe a la Llista de lloguers</a
@endsection