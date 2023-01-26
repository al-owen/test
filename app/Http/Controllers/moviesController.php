<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Category;
use Illuminate\Http\Request;

class moviesController extends Controller
{

    //nos envia al formulario para crear peliculas
    public function addForm(Request $r)
    {
        $categories = Category::all();
        return view("addMovie", ['categories' => $categories]);
    }

    //crea la pelicula segun los datos enviados por el get y los guarda en la base de datos
    public function addMovie(Request $r)
    {
        $movie = new Movie;
        $movie->name = $r->name;
        $movie->description = $r->description;
        $movie->year = $r->year;
        //simplemente con decirle el id de la categoria ya se relacionan
        $movie->category_id = $r->category_id;
        $movie->save();
        return redirect('/show');
    }

    //nos envia a la pagina que muestra todas las peliculas
    public function show()
    {
        $movies = Movie::all();
        $categories = Category::all();
        return view("showMovies", ['movies' => $movies, 'categories' => $categories]);
    }

    //nos reenvia a la vista para modificar una vista
    public function modify(Request $r)
    {
        $movie = Movie::find($r->id);
        $categories = Category::all();
        return view("modifyMovie", ['movie' => $movie, 'categories' => $categories]);
    }

    //modifica la pelicula segun los datos enviados por el get del formulario
    public function update(Request $r)
    {
        $movie = Movie::find($r->id);
        $movie->name = $r->name;
        $movie->description = $r->description;
        $movie->year = $r->year;
        $movie->category_id = $r->category_id;
        $movie->save();
        return redirect('/show');
    }

    //busca el objeto con la id pasada por parametro y lo borra
    public function delete(Request $r)
    {
        $movie = Movie::find($r->id);
        $movie->delete();
        return redirect('/show');
    }
}
