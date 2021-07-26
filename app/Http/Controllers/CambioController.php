<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cambio;


class CambioController extends Controller
{
    /**
     * Lista de tipos de cambio ordenados por fecha de creación
     * Los más recientes primero
     *
     * @return \Illuminate\Http\Response
     * 
     */


    public function index()
    {
        $cambio = Cambio::orderBy('created_at', 'DESC')->get();
        
        return view('index', compact('cambio'));
    }

    /**
     * Formulario para crear un nuevo tipo de cambio.
     
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');

    }

    /**
     * Grabando el nuevo tipo de cambio.
     
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeData = $request->all();
        $cambio = Cambio::create($storeData);

        return redirect('/cambios');
    }
    /**
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Cambio::findOrFail($id)->get();
    }

    /**
     * Form para editar el tipo de cambio.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cambio = Cambio::findOrFail($id);
        return view('edit', compact('cambio'));
    }

    /**
     * Editando los tipos de cambio .
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updateData = $request->validate([
            'tc_compra' => 'required|max:255',
            'tc_venta' => 'required|max:255',
        ]);
        Cambio::whereId($id)->update($updateData);
        return redirect('/cambios')->with('completado', 'El TC fue editado');
    }

    /**
     * Eliminando tipos de cambio.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cambio = Cambio::findOrFail($id);
        $cambio->delete();

        return redirect('/cambios')->with('completado', 'El TC fue eliminado');
    }
}