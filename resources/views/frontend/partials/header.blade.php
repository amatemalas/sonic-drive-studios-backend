<nav class="c-nav fixed-top {{ url()->current() != route('home') ? 'navbar-inner bg-dark' : '' }}" data-aos="fade-down">
    <div class="c-prenav border-bottom">
        <div class="container">
            <div class="text-light py-2 d-flex justify-content-between">
                <div>
                    <a class="me-3" href="mailto:sonicdrivestudios@gmail.com">
                        <i class="fa-solid fa-envelope"></i> <span>sonicdrivestudios@gmail.com</span>
                    </a>
                    <a href="tel:+34651504734">
                        <i class="fa-solid fa-phone"></i> <span>+34 651 50 47 34</span>
                    </a>
                </div>
                <div>
                    <a href="#" target="_blank">
                        <i class="fa-brands fa-instagram fa-lg"></i>
                    </a>
                    <a class="ms-2" href="#" target="_blank">
                        <i class="fa-brands fa-twitter fa-lg"></i>
                    </a>
                    <a class="ms-2" href="#" target="_blank">
                        <i class="fa-brands fa-whatsapp fa-lg"></i>
                    </a>
                    <a class="ms-2" href="#" target="_blank">
                        <i class="fa-brands fa-youtube fa-lg"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand d-lg-none" href="{{ route('home') }}">
                <img width="170" src="{{ asset('images/logo-white.png') }}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
            </button>
            <div class="d-lg-flex justify-content-center collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0 align-items-center">
                    <li class="nav-item">
                        <a class="nav-link {{ url()->current() === route('home') ? 'active' : '' }}" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ url()->current() === route('frontend.works.index') ? 'active' : '' }}" href="{{ route('frontend.works.index') }}">Trabajos</a>
                    </li>
                    <li class="nav-item ms-3 d-lg-block d-none">
                        <a class="navbar-brand" href="{{ route('home') }}">
                            <img width="230" src="{{ asset('images/logo-white.png') }}" alt="">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                </ul>
                
            </div>
        </div>
    </div>
</nav>


