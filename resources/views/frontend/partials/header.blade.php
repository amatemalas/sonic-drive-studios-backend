<nav class="fixed-top" data-aos="fade-down">
    <div class="c-prenav container-fluid border-bottom">
        <div class="text-light py-2 d-flex justify-content-between">
            <div>
                <a class="me-3" href="mailto:sonicdrivestudios@gmail.com">
                    <i class="fa-solid fa-envelope"></i> <span>sonicdrivestudios@gmail.com</span>
                </a>
                <a href="tel:+34123456789">
                    <i class="fa-solid fa-phone"></i> <span>+34 123 456 789</span>
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
    
    <div class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand d-lg-none" href="{{ route('home') }}">
                <img width="170" src="{{ asset('images/logo-white.png') }}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
            </button>
            <div class="d-lg-flex justify-content-center ms-4 collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0 align-items-center">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Trabajos</a>
                    </li>
                    <li class="nav-item ms-3 d-lg-block d-none">
                        <a class="navbar-brand" href="{{ route('home') }}">
                            <img width="170" src="{{ asset('images/logo-white.png') }}" alt="">
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


