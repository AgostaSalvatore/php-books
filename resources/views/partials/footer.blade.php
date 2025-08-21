<footer class="bg-primary text-white py-5 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h5 class="mb-3">
                    <span class="me-2">📚</span>
                    Libreria Moderna
                </h5>
                <p class="mb-2">La tua libreria di fiducia per scoprire nuovi mondi attraverso i libri.</p>
                <p class="mb-0">
                    <small class="text-light">
                        <i class="fas fa-map-marker-alt me-1"></i>
                        Via dei Libri, 123 - Milano
                    </small>
                </p>
            </div>
            <div class="col-md-3">
                <h6 class="mb-3">Link Utili</h6>
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <a href="{{ route('index') }}" class="text-light text-decoration-none">
                            <i class="fas fa-home me-1"></i>Home
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#catalogo" class="text-light text-decoration-none">
                            <i class="fas fa-book me-1"></i>Catalogo
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#statistiche" class="text-light text-decoration-none">
                            <i class="fas fa-chart-bar me-1"></i>Statistiche
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <h6 class="mb-3">Contatti</h6>
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <small class="text-light">
                            <i class="fas fa-phone me-1"></i>
                            +39 02 1234567
                        </small>
                    </li>
                    <li class="mb-2">
                        <small class="text-light">
                            <i class="fas fa-envelope me-1"></i>
                            info@libreriamoderna.it
                        </small>
                    </li>
                    <li class="mb-2">
                        <small class="text-light">
                            <i class="fas fa-clock me-1"></i>
                            Lun-Sab: 9:00-19:00
                        </small>
                    </li>
                </ul>
            </div>
        </div>
        <hr class="my-4 border-light opacity-25">
        <div class="row align-items-center">
            <div class="col-md-6">
                <small class="text-light">
                    © {{ date('Y') }} Libreria Moderna. Tutti i diritti riservati.
                </small>
            </div>
            <div class="col-md-6 text-md-end">
                <small class="text-light">
                    Powered by Laravel & Bootstrap
                </small>
            </div>
        </div>
    </div>
</footer>
