<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dades_clients = Client::all();
        return view('llista7', compact('dades_clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crea3');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nouClient = $request->validate([
            'Dni_client' => 'required',
            'Nom_i_cognoms' => 'required',
            'Edat' => 'required',
            'Telèfon' => 'required',
            'Adreça' => 'required',
            'Ciutat' => 'required',
            'Email' => 'required',
            'Número_del_permís_de_conducció' => 'required',
            'Punts_del_permís_de_conducció' => 'required',
            'Tipus_de_targeta' => 'required',
            'Número_targeta' => 'required',
            ]);
            $client = Client::create($nouClient);
            return view('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $Dni_client)
    {
        $dades_clients = Client::findOrFail($Dni_client);
        return view('mostra3',compact('dades_clients'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $Dni_client)
    {
        $dades_clients = Client::findOrFail($Dni_client);
        return view('actualitza3',compact('dades_clients'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $Dni_client)
    {
        $noves_dades_client = $request->validate([
            'Nom_i_cognoms' => 'required',
            'Edat' => 'required',
            'Telèfon' => 'required',
            'Adreça' => 'required',
            'Ciutat' => 'required',
            'Email' => 'required',
            'Número_del_permís_de_conducció' => 'required',
            'Punts_del_permís_de_conducció' => 'required',
            'Tipus_de_targeta' => 'required',
            'Número_targeta' => 'required',
            ]);
            $client = Client::findOrFail($Dni_client)->update($noves_dades_client);
            return view('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $Dni_client)
    {
        $client = Client::findOrFail($Dni_client)->delete();
        return view('dashboard');
    }
}
