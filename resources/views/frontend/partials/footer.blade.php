<footer class="c-footer bg-dark text-light border-top">
    <div class="container py-5">
        <div class="d-flex align-items-center justify-content-center mb-3">
            <a class="" href="{{ route('home') }}">
                <img width="150" src="{{ asset('images/logo-white-3.png') }}" alt="">
            </a>
        </div>
        <ul class="list-unstyled d-flex justify-content-center my-4">
            <li class="mx-4 p-2 bg-gradient rounded-circle">
                <a class="text-primary" href="https://www.instagram.com/sonicdrivestudios/" target="_blank">
                    <i class="fa-brands fa-fw fa-instagram fa-lg"></i>
                </a>
            </li>
            <li class="mx-4 p-2 bg-gradient rounded-circle">
                <a class="text-primary" href="https://twitter.com/StudiosDrive" target="_blank">
                    <i class="fa-brands fa-fw fa-twitter fa-lg"></i>
                </a>
            </li>
            <li class="mx-4 p-2 bg-gradient rounded-circle">
                <a class="text-primary" href="https://wa.link/fiwf6s" target="_blank">
                    <i class="fa-brands fa-fw fa-whatsapp fa-lg"></i>
                </a>
            </li>
            <li class="mx-4 p-2 bg-gradient rounded-circle">
                <a class="text-primary" href="#" target="_blank">
                    <i class="fa-brands fa-fw fa-youtube fa-lg"></i>
                </a>
            </li>
        </ul>
        <div class="d-flex align-items-center justify-content-center">
            <div>
                <a class="btn btn-link text-decoration-none text-white" href="{{ route('home') }}">Inicio</a>
                ·
                <a class="btn btn-link text-decoration-none text-white" href="#">Política de Cookies</a>
                ·
                <a class="btn btn-link text-decoration-none text-white" href="#">Política de privacidad</a>
                ·
                <a class="btn btn-link text-decoration-none text-white" href="#">Aviso Legal</a>
            </div>
        </div>

        <div class="d-flex justify-content-center pt-4">
            <p class="text-muted">© {{ date('Y') }} Sonic Drive Studios. All rights reserved.</p>
        </div>
    </div>
</footer>
