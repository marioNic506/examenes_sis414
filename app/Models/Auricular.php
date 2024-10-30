<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Model;

class Auricular extends Model
{
    protected $table = 'auriculares'; 

    protected $fillable = [
        'nombre',
        'marca',
        'modelo',
        'precio',
    ];
}

