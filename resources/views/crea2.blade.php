@extends('disseny')
@section('content')
<div class="card mt-5">
  <div class="card-header">
    Afegeix un nou cotxe
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
    <form method="post" action="/auto">
        @csrf
        <!-- https://laravel.com/docs/10.x/csrf -->
        <div class="form-group">           
            <label for="Matricula_auto">Matricula</label>
            <input type="text" class="form-control" name="Matricula_auto"/>
        </div>
        <div class="form-group">           
            <label for="Numero_bastidor">Bastidor</label>
            <input type="text" class="form-control" name="Numero_bastidor"/>
        </div>
        <div class="form-group">           
            <label for="Marca">Marca</label>
            <input type="text" class="form-control" name="Marca"/>
        </div>       
        <div class="form-group">
            <label for="Model">Model</label>
            <input type="text" class="form-control" name="Model"/>
        </div>
        <div class="form-group">
            <label for="Color">Color</label>
            <input type="text" class="form-control" name="Color"/>
        </div>
        <div class="form-group">
            <label for="Numero_places">Places</label>
            <input type="text" class="form-control" name="Numero_places"/>
        </div>
        <div class="form-group">           
            <label for="Numero_portes">Portes</label>
            <input type="text" class="form-control" name="Numero_portes"/>
        </div>
        <div class="form-group">           
            <label for="Tipus_combustible">Combustible</label>
            <select name="Tipus_combustible">
                <option value="Gasolina">Gasolina</option>
                <option value="Diesel">Diesel</option>
                <option value="elèctric">elèctric</option>			    
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