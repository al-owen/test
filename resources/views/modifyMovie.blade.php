<form action="{{ url('/update') }}" method="GET">
    <label for="id">Id:</label>
    <input type="text" id="id" name="id" value="{{$movie->id}}" readonly><br>
    <label for="name">Nombre:</label>
    <input type="text" id="name" name="name" value="{{$movie->name}}" required>
    <br>
    <label for="description">Descripcion:</label>
    <textarea id="description" name="description" required>{{ $movie->description}}</textarea>
    <br>
    <label for="year">Año:</label>
    <input type="number" id="year" name="year" value="{{ $movie->year}}" required>
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
