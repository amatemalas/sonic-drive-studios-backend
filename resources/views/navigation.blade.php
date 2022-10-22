<div class="d-flex flex-column flex-shrink-0 p-3 bg-dark col-2 text-white navigation">
    <a href="{{ route('backend.index') }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-light text-decoration-none position-relative">
        <span class="fs-4 text-center">
            <img class="mw-100 w-75" src="{{ asset('images/new-logo-white.png') }}" alt="">
        </span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto c-navbar">
        <li>
            <a href="{{ route('backend.index') }}" class="nav-link link-light {{ isActiveRoute('backend.index') }}" aria-current="page">
                <i class="fa-solid fa-home"></i>
                <span>Inicio</span>
            </a>
        </li>
        <li>
            <a href="{{ route('backend.calendar') }}" class="nav-link link-light {{ isActiveRoute('backend.calendar') }}">
                <i class="fa-solid fa-calendar"></i>
                <span>Calendario</span>
            </a>
        </li>
        <li>
            <a href="{{ route('works.index') }}" class="nav-link link-light {{ isActiveRoute('works.*') }}">
                <i class="fa-solid fa-music"></i>
                <span>Trabajos</span>
            </a>
        </li>
        <li>
            @php
                $notifications = \App\Models\Contact::where('is_read', 0)->get()->count();
            @endphp

            <a href="{{ route('contacts.index') }}" class="nav-link link-light {{ isActiveRoute('contacts.*') }}">
                <i class="fa-solid fa-paper-plane"></i>
                <span>Contactos
                    @if($notifications)
                        <span class="badge bg-danger rounded-pill align-middle">
                            {{ $notifications }}
                        </span>
                    @endif
                </span>
            </a>
        </li>
        <li>
            <a href="{{ route('products.index') }}" class="nav-link link-light {{ isActiveRoute('products.*') }}">
                <i class="fa-solid fa-cart-shopping"></i>
                <span>Productos</span>
            </a>
        </li>
        {{-- <li>
            <a href="{{ route('songs.index') }}" class="nav-link link-light {{ isActiveRoute('songs.*') }}">
                <i class="fa-solid fa-music"></i>
                <span>Canciones</span>
            </a>
        </li> --}}
        {{-- <li>
            <a href="#" class="nav-link link-light">
                <i class="fa-solid fa-newspaper"></i>
                <span>Noticias</span>
            </a>
        </li> --}}
        <li>
            <a href="{{ route('settings') }}" class="nav-link link-light {{ isActiveRoute('settings') }}">
                <i class="fa-solid fa-gear"></i>
                <span>Configuración</span>
            </a>
        </li>
    </ul>
    <hr>
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center link-light text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="{{ auth()->user()->path ?? "https://github.com/mdo.png" }}" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>{{ auth()->user()->name ?? 'Alex Tomàs' }}</strong>
        </a>
        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2" style="">
            <li><a class="dropdown-item" href="{{ route('settings') }}">Ajustes</a></li>
            <li><a class="dropdown-item" href="{{ route('profile') }}">Perfil</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{ route('signout') }}">Desconectarse</a></li>
        </ul>
    </div>
</div>
