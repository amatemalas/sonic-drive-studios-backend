<div class="d-flex flex-column flex-shrink-0 p-3 bg-dark col-2 text-white">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-light text-decoration-none">
        <span class="fs-4">Sonic Drive Studios</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{ route('backend.index') }}" class="nav-link active" aria-current="page">
                Inicio
            </a>
        </li>
        <li>
            <a href="#" class="nav-link link-light">
                Recursos
            </a>
        </li>
        <li>
            <a href="#" class="nav-link link-light">
                Productos
            </a>
        </li>
        <li>
            <a href="#" class="nav-link link-light">
                Contactos
            </a>
        </li>
        <li>
            <a href="#" class="nav-link link-light">
                Noticias
            </a>
        </li>
    </ul>
    <hr>
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center link-light text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="{{ asset(auth()->user()->image ?? "https://github.com/mdo.png") }}" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>{{ auth()->user()->name ?? 'John Doe' }}</strong>
        </a>
        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2" style="">
            <li><a class="dropdown-item" href="#">Ajustes</a></li>
            <li><a class="dropdown-item" href="#">Perfil</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Desconectarse</a></li>
        </ul>
    </div>
</div>
