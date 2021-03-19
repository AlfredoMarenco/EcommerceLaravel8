<aside class="col-md-3">
    <nav class="list-group">
        <a class="list-group-item active" href=""> Descripcion de la cuenta</a>
        <a class="list-group-item" href="{{ route('user.orders') }}">Mis ordenes</a>
        <a class="list-group-item" href="page-profile-setting.html"> Configurar cuenta </a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a class="list-group-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        this.closest('form').submit();"> Cerrar sesión </a>
        </form>
    </nav>
</aside> <!-- col.// -->
