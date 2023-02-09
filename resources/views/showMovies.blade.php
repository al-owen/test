<div>
    {{-- nos redirige al formulario para crear una nueva pelicula --}}
    <a href="{{url('/add')}}"> Crear una nueva pelicula </a><br>
</div>
<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Año</th>
            <th>Categoria</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($movies as $movie)
            <tr>
                <td>{{ $movie->name }}</td>
                <td>{{ $movie->description }}</td>
                <td>{{ $movie->year }}</td>
                {{-- podemos acceder al nombre de la categoria de esta manera
                    acordaros de que es relacional, por lo tanto se crea un objeto de tipo category
                    dentro de la pelicula--}}
                <td>{{ $movie->category->name }}</td>
                <td><img src="{{ asset($movie->cover) }}" alt="cover" width="70" height="100"></td>
                <td><a href="{{url('/modify')}}/{{$movie->id}}"> Modificar </a></td>
                <td><a href="{{url('/delete')}}/{{$movie->id}}"> Borrar </a></td>
            </tr>
        @endforeach
    </tbody>
</table>
