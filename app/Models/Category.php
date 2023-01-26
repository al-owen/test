<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //declaro los campos que se rellenan
    protected $fillable = [
        'name'
    ];

    //establezco la relacion de que las peliculas tienen una categorias
    public function movies()
    {
        return $this->belongsTo(Movie::class);
    }

    use HasFactory;
}
