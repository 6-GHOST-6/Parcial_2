<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RefrigeradorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $refrigeradores = Refrigerador::all();
    return view('refrigeradores.index', compact('refrigeradores'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    return view('refrigeradores.create');
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'marca' => 'required',
        'capacidad' => 'required|integer',
        'tipo' => 'required',
        'eficiencia_energetica' => 'required',
    ]);

    Refrigerador::create($request->all());
    return redirect()->route('refrigeradores.index')->with('success', 'Refrigerador creado exitosamente.');
}

    /**
     * Display the specified resource.
     */
    public function show(Refrigerador $refrigerador)
{
    return view('refrigeradores.show', compact('refrigerador'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Refrigerador $refrigerador)
{
    return view('refrigeradores.edit', compact('refrigerador'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Refrigerador $refrigerador)
{
    $request->validate([
        'marca' => 'required',
        'capacidad' => 'required|integer',
        'tipo' => 'required',
        'eficiencia_energetica' => 'required',
    ]);

    $refrigerador->update($request->all());
    return redirect()->route('refrigeradores.index')->with('success', 'Refrigerador actualizado exitosamente.');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Refrigerador $refrigerador)
{
    $refrigerador->delete();
    return redirect()->route('refrigeradores.index')->with('success', 'Refrigerador eliminado exitosamente.');
}
}
