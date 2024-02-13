<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarreraController extends Controller
{
<<<<<<< Updated upstream
    //
=======
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carreras = Carreras::all();
        return view("carrera.index", compact("carreras"));
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
        $carreras = new Carreras;
        $carreras->nombre=$request->input('nombre');
        $carreras->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Carreras $carrera)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Carreras $carrera)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Carreras $carrera)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Carreras $carrera)
    {
        //
    }
>>>>>>> Stashed changes
}
