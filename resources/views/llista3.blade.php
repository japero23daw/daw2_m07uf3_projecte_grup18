@extends('disseny')
@section('content')
    <h1>Llista de clients</h1>
    <div class="mt-5">
        <table class="table">
            <thead>
            <tr class="table-primary">
                <td>Dni_client</td>
                <td>Nom_i_cognoms</td>
                <td>Edat</td>               
                <td>Telèfon</td>
                <td>Adreça</td>
                <td>Ciutat</td>
                <td>Email</td>
                <td>Número_del_permís_de_conducció</td>
                <td>Punts_del_permís_de_conducció</td>
                <td>Tipus_de_targeta</td>
                <td>Número_targeta</td>
                <td>Accions sobre la taula</td>
            </tr>
            </thead>
            <tbody>
            @foreach($dades_clients as $client)
                <tr>
                    <td>{{$client->Dni_client}}</td>
                    <td>{{$client->Nom_i_cognoms}}</td>
                    <td>{{$client->Edat}}</td>
                    <td>{{$client->Telèfon}}</td>
                    <td>{{$client->Adreça}}</td>
                    <td>{{$client->Ciutat}}</td>
                    <td>{{$client->Email}}</td>
                    <td>{{$client->Número_del_permís_de_conducció}}</td>
                    <td>{{$client->Punts_del_permís_de_conducció}}</td>
                    <td>{{$client->Tipus_de_targeta}}</td>
                    <td>{{$client->Número_targeta}}</td>
                    <td class="text-left">
                    <form action="{{ route('client.destroy', $client->Dni_client)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">
                    Esborra
                    </button>
                    </form>
                    <a href="{{ route('client.show', $client->Dni_client)}}" class="btn btn-info btn-sm">Mostra</a>
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
