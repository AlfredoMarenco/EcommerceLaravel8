<aside class="col-md-3">
    <nav class="list-group">
        <a class="list-group-item active" href="{{ route('user.profile') }}"> Mi cuenta </a>
        {{-- <a class="list-group-item" href="mi-direccion.html"> Mi dirección </a> --}}
        <a class="list-group-item" href="{{ route('user.orders') }}"> Mis Órdenes </a>
        <a class="list-group-item" href="{{ route('user.settings') }}"> Configurar cuenta </a>
        <a class="list-group-item" href="#"> Ayuda </a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a class="list-group-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                            this.closest('form').submit();"> Cerrar sesión </a>
        </form>
    </nav>
</aside> <!-- col.// -->
