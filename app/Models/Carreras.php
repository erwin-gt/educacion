<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carreras extends Model
{
    use HasFactory;

    protected $table = "Carreras";
    protected $fillable = ['nombre'];
    protected $primaryKey = 'idcarrera';
    protected $guarded = [];
public $timestamps = false;
}
