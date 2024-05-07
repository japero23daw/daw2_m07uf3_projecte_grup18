@extends('disseny')
@section('content')
    <h1>Llista d'automòbils</h1>
    <div class="mt-5">
        <table class="table">
            <thead>
            <tr class="table-primary">
                <td>Matricula_auto</td>
                <td>Numero_bastidor</td>
                <td>Marca</td>
                <td>Model</td>
                <td>Accions sobre la taula</td>
            </tr>
            </thead>
            <tbody>
            @foreach($dades_autos as $auto)
                <tr>
                    <td>{{$auto->Matricula_auto}}</td>
                    <td>{{$auto->Numero_bastidor}}</td>
                    <td>{{$auto->Marca}}</td>
                    <td>{{$auto->Model}}</td>
                    <td class="text-left">
                    <form action="{{ route('auto.destroy', $auto->Matricula_auto)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">
                    Esborra
                    </button>
                    </form>
                    <a href="{{ route('auto.show', $auto->Matricula_auto)}}" class="btn btn-info btn-sm">Mostra</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    <div>
    <div class="p-6 bg-white border-b border-gray-200">
    <a href="{{ url('dashboard') }}">Torna al dashboard</a>
</div>
@endsection
