<h2>Crear Pelicula</h2>
{{-- url() es una funcion que permite coger la ruta relativa a lo raiz de web.php, esto evita tener que escribir la ruta absoluta --}}
<form action="{{ url('/addMovie') }}" method="GET">
    <label for="name">Nombre:</label>
    <input type="text" id="name" name="name" value="" required>
    <br>
    <label for="description">Descripcion:</label>
    <textarea id="description" name="description" required></textarea>
    <br>
    <label for="year">Año:</label>
    <input type="number" id="year" name="year" value="2023" required>
    <br>
    <label for="category_id">Categoria:</label>
    <select id="category_id" name="category_id" required>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
    <br>
    <button type="submit">Guardar</button>
</form>

<h2>Crear Categoria</h2>
<form action="{{ url('/addCategory') }}" method="GET">
    <label for="name">Nombre:</label>
    <input type="text" id="name" name="name" value="" required>
    <button type="submit">Guardar</button>
</form>
