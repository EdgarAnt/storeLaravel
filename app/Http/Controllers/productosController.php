<?php

namespace App\Http\Controllers;

use App\Models\productos;
use Illuminate\Http\Request;

class productosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //dd("Holas"); //The principal function for dd is show the information for variables or objects
        //instead of "/" we are used the "."
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    //The request is a object data type, what send all the actual information.
    public function store(Request $request)
    {
        //
        //when send the information only we are debuggin 
        // dd($request);
        $datos = $request->validate(
            [
                'nombre'=>'required|max:60',
                'descripcion' =>'nullable|max:255',
                'vendido'=>'required|numeric|min:0|max:1',
                'stock'=>'required|numeric|min:0|max:2',
                //in this case the letter "t" is like the zone, the letter "h" and the minutes is the i, with out that no will work
                'caducidad' => 'required|date_format:Y-m-d\Th:i'
            ]);
        dd($datos);
    }

    /**
     * Display the specified resource.
     */
    public function show(productos $productos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(productos $productos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, productos $productos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(productos $productos)
    {
        //
    }
}
