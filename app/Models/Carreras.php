<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carreras extends Model
{
    use HasFactory;
    protected $table="carreras";
    protected $primarykey = "idcarrera";
    protected $fillable = ["nombre_carrera"];
    protected $guarded=[];
    public $timestamps = false;
}
