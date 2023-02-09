@if(Session::get('user') != null)
    <h1>Bienvenido usuario {{Session::get('user')}}</h1>
    <p><a href="{{url('/logout')}}">Logout</a></p>
@else
    <h1>El usuario no existe logeate para acceder a este sitio</h1>
    <p><a href="{{url('/loginForm')}}">Login</a></p>
@endif
