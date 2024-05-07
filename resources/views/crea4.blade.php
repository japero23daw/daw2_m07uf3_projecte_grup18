@extends('disseny')
@section('content')
<div class="card mt-5">
  <div class="card-header">
    Afegeix un nou lloguer
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
    <form method="post" action="/llog">
        @csrf
        <!-- https://laravel.com/docs/10.x/csrf -->
        <div class="form-group">           
            <label for="Matricula_auto">Matricula</label>
            <input type="text" class="form-control" name="Matricula_auto"/>
        </div>
        <div class="form-group">           
            <label for="Dni_client">Dni Client</label>
            <input type="text" class="form-control" name="Dni_client"/>
        </div>
        <div class="form-group">           
            <label for="Data_prestec">Data de prestec</label>
            <input type="date" class="form-control" name="Data_prestec"/>
        </div>
        <div class="form-group">           
            <label for="Data_devolucio">Data de devolucio</label>
            <input type="date" class="form-control" name="Data_devolucio"/>
        </div>
        <div class="form-group">           
            <label for="Preu_dia">Preu per dia</label>
            <input type="text" class="form-control" name="Preu_dia"/>
        </div>        
        <div class="form-group">           
            <label for="Prestec_deposit_ple">Deposit senser</label>
            <select name="Prestec_deposit_ple">
			    <option value="1">Si</option>
			    <option value="0">No</option>			    
			</select>
        </div>
        <div class="form-group">           
            <label for="Tipus_dassegurança">Tipus de contracte</label>
            <select name="Tipus_dassegurança">
			    <option value="Franquicia 1000 euros">Franquicia 1000 euros</option>
			    <option value="Franquicia 500 euros">Franquicia 500 euros</option>
			    <option value="Sense franquicia">Sense franquicia</option>
			</select>            
        </div>      
        <button type="submit" class="btn btn-block btn-primary">Envia</button>
    </form>    
  </div>
</div>
<div class="p-6 bg-white border-b border-gray-200">
<a href="{{ url('dashboard') }}">Torna al dashboard</a>
</div>
@endsection