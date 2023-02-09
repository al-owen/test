<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesión</title>
</head>
<body>
    <h1>Iniciar Sesión</h1>
    <form action="{{ route('login') }}" method="post">
        @csrf
        <div>
            <label for="email">Correo Electrónico:</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="password">Contraseña:</label>
            <input type="password" name="password" id="password">
        </div>
        <button type="submit">Iniciar Sesión</button>
    </form>
</body>
</html>
