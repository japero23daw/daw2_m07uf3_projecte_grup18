@extends('disseny')
@section('content')
    <h1>Llista de Lloguers</h1>
    <div class="mt-5">
        <table class="table">
            <thead>
            <tr class="table-primary">
                <td>Dni_client</td>
                <td>Matricula_auto</td>
                <td>Data_prestec</td>
                <td>Data_devolucio</td>
                <td>Preu_dia</td>
                <td>Prestec_deposit_ple</td>
                <td>Tipus_dassegurança</td>
                <td>Accions sobre la taula</td>
            </tr>
            </thead>
            <tbody>
            @foreach($dades_llogas as $llog)
                <tr>
                    <td>{{$llog->Dni_client}}</td>
                    <td>{{$llog->Matricula_auto}}</td>
                    <td>{{$llog->Data_prestec}}</td>
                    <td>{{$llog->Data_devolucio}}</td>
                    <td>{{$llog->Preu_dia}}</td>
                    <td>{{$llog->Prestec_deposit_ple == "1" ? 'Sí':'No'}}</td>
                    <td>{{$llog->Tipus_dassegurança}}</td>
                    <td class="text-left">
                    <form action="{{ route('llog.destroy', $llog->Dni_client)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">
                    Esborra
                    </button>
                    </form>
                    <a href="{{ route('llog.show', $llog->Dni_client)}}" class="btn btn-info btn-sm">Mostra</a>
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
