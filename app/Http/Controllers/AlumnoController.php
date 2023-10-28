<?php

namespace App\Http\Controllers;

use App\Models\alumnos;
use Illuminate\Http\Request;
use DB;

class AlumnoController extends Controller
{
    public function obtenerAlumnos(){
        return alumnos::all();
}
}
