<header class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="/img/logo.png" width="50" height="50" alt="logo">
        </a>

        <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#menu">
            <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link {{ setActive('home') }}" href="{{ route('home') }}">Inicio</a></li>
                <li class="nav-item"><a class="nav-link {{ setActive('products.index') }} {{ setActive('products.searchCategory') }}" href="{{ route('products.index') }} ">Productos</a></li>
                <li class="nav-item"><a class="nav-link {{ setActive('faq') }}" href="{{ route('faq') }}">F.A.Q.</a></li>
                @guest
                    <li class="nav-item"><a class="nav-link {{ setActive('register') }}" href="{{ route('register') }}">Registrarse</a></li>
                    <li class="nav-item"><a class="nav-link {{ setActive('login') }}" href="{{ route('login') }}">Login</a></li>
                @else
                    <li class="nav-item"><a class="nav-link {{ setActive('profile.index') }}" href="{{ route('profile.index') }}">Mi perfil</a></li>
                @endguest
                <li class="nav-item"><a class="nav-link {{ setActive('contact') }}" href="{{ route('contact') }}">Contacto</a></li>
                @auth
                    <li class="nav-item"><a class="nav-link" href="#"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"
                    >Deslogearse</a></li>
                @endauth
                <li class="nav-item">
                    <a class="nav-link {{ setActive('cart.index') }}" href="{{ route('cart.index') }}">Carrito
                        @if(Cart::count() > 0)
                            <span class="cart-indicator">{{ Cart::count() }}</span>
                        @endif
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</header>
