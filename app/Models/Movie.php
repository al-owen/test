<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //declaro los campos que se rellenan
    protected $fillable = [
        'name', 'description', 'year', 'category_id'
    ];

    //establezco que una categoria le pertenece a pelicula
    public function category()
    {
        return $this->hasOne(Category::class);
    }

    use HasFactory;
}
