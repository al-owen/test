<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class categoriesController extends Controller
{
    // crea una nueva categoria y nos redirige a la tabla de peliculas
    public function add(Request $r)
    {
        $category = new Category;
        $category->name = $r->name;
        $category->save();
        return redirect('/show');
    }


}
