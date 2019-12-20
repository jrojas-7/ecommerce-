<header class="navbar navbar-expand-md navbar-dark bg-dark">

    <div class="container">

        {{-- BOTON --}}
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- LOGO --}}
        <a href="{{ route('home') }}" class="navbar-brand">Korbax</a>

        {{-- CARRITO --}}
        <div class="order-md-last">
            <a href="" class="mx-1">Registro</a>
            <a href="" class="mx-1">Login</a>
            <a href="">Deslogearse</a>
            <a href=""><i class="fas fa-shopping-cart"></i></a>
        </div>

        {{-- MENU COLAPSABLE --}}
        <div class="collapse navbar-collapse" id="menu">
            <div class="navbar-nav ml-md-auto mr-md-auto">
                <a href="{{ route('home') }}" class="nav-item nav-link {{ setActive('home') }}">Inicio</a>
                <a href="{{ route('products.index') }}" class="nav-item nav-link {{ setActive('products.index') }} {{ setActive('products.searchCategory') }}">Productos</a>
                <a href="{{ route('faq') }}" class="nav-item nav-link {{ setActive('faq') }}">F.A.Q.</a>
                <a href="{{ route('contact') }}" class="nav-item nav-link {{ setActive('contact') }}">Contacto</a>
            </div>
        </div>


    </div>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

</header>