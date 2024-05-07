<?php

namespace App\Http\Controllers;

use App\Models\Lloga;
use Illuminate\Http\Request;

class LlogaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dades_llogas = Lloga::all();
        return view('llista4', compact('dades_llogas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crea4');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nouLloga = $request->validate([
            'Matricula_auto' => 'required',
            'Dni_client' => 'required',
            'Data_prestec' => 'required',
            'Data_devolucio' => 'required',
            'Preu_dia' => 'required',
            'Prestec_deposit_ple' => 'required',
            'Tipus_dassegurança' => 'required',
            ]);
            $lloga = Lloga::create($nouLloga);
            return view('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $Dni_client)
    {
        $dades_llogas = Lloga::findOrFail($Dni_client);
        return view('mostra4',compact('dades_llogas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $Dni_client)
    {
        $dades_llogas = Lloga::findOrFail($Dni_client);
        return view('actualitza4', compact('dades_llogas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $Dni_client)
    {
        $noves_dades_lloga = $request->validate([
            'Matricula_auto' => 'required',
            'Dni_client' => 'required',
            'Data_prestec' => 'required',
            'Data_devolucio' => 'required',
            'Preu_dia' => 'required',
            'Prestec_deposit_ple' => 'required',
            'Tipus_dassegurança' => 'required',
            ]);
            $lloga = Lloga::findOrFail($Dni_client)->update($noves_dades_lloga);
            return view('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $Dni_client)
    {
        $lloga = Lloga::findOrFail($Dni_client)->delete();
        return view('dashboard');
    }
}
