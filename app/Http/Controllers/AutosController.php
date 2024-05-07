<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use Dompdf\Options;
use App\Models\Autos;
use Illuminate\Http\Request;

class AutosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dades_autos = Autos::all();
        return view('llista6', compact('dades_autos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crea2');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nouAuto = $request->validate([
            'Matricula_auto' => 'required',
            'Numero_bastidor' => 'required',
            'Marca' => 'required',
            'Model' => 'required',
            'Color' => 'required',
            'Numero_places' => 'required',
            'Numero_portes' => 'required',
            'Tipus_combustible' => 'required',
        ]);
        
        $auto = Autos::create($nouAuto);
        return view('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $Matricula_auto)
    {
        $dades_autos = Autos::findOrFail($Matricula_auto);
        return view('mostra2', compact('dades_autos'));
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $Matricula_auto)
    {
        $dades_autos = Autos::findOrFail($Matricula_auto);
        return view('actualitza2', compact('dades_autos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $Matricula_auto)
    {
        $noves_dades_autos = $request->validate([
            'Matricula_auto' => 'required',
            'Numero_bastidor' => 'required',
            'Marca' => 'required',
            'Model' => 'required',
            'Color' => 'required',
            'Numero_places' => 'required',
            'Numero_portes' => 'required',
            'Tipus_combustible' => 'required',
        ]);
        
        $auto = Autos::findOrFail($Matricula_auto)->update($noves_dades_autos);
        return view('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $Matricula_auto)
    {
        $auto = Autos::findOrFail($Matricula_auto)->delete();
        return view('dashboard');
    
    }
}
