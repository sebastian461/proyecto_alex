<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rol;

class RolController extends Controller
{

    /* 

        index(): para mostrar una lista del recurso.
        create(): para mostrar el formulario de creación de un nuevo recurso.
        store(): para almacenar un nuevo recurso.
        show($id): para mostrar un recurso específico.
        edit($id): para mostrar el formulario de edición de un recurso.
        update($id): para actualizar un recurso específico.
        destroy($id): para eliminar un recurso específico.

    */

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rol = rol::all();
        return view('aplicacion.rol.index', ['rol' => $rol]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
