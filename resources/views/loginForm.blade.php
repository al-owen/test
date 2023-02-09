<form action="{{url('/login')}}" method="post">
    @csrf
    <label for="user">Username</label>
    <input type="text" name="user">
    <label for="password">Contraseña</label>
    <input type="password" name="password">
    <input type="submit" value="validar">
</form>
