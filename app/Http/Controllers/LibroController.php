<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Libro::all();
    }

    public function registro()
    {
        $libro = new Libro();
        $libro->autor = "J.R.R. Tolkien";
        $libro->titulo = "El señor de los anillos";
        $libro->editorial = "Minotauro";
        $libro->edicion = "1ra edicion";
        $libro->año = "1954";
        $libro->categoria = "Fantasia";
        $libro->paginas = "1232";
        $libro->precio = "12.50";
        $libro->save();

        


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $libro = new Libro;
        $libro->Autor = $request->input('Autor');
        $libro->Titulo = $request->input('Titulo');
        $libro->Editorial = $request->input('Editorial');
        $libro->Edicion = $request->input('Edicion');
        $libro->Año = $request->input('Año');
        $libro->Categoria = $request->input('Categoria');
        $libro->Paginas = $request->input('Paginas');
        $libro->Precio = $request->input('Precio');
        $libro->save();        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $libro = Libro::findOrFail($id)->first();
        return json_encode($libro);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
