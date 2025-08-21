<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('index') }}">
                <span class="me-2">📚</span>
                <span>Libreria Moderna</span>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('index') }}">
                            <i class="fas fa-home me-1"></i>Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#catalogo">
                            <i class="fas fa-book me-1"></i>Catalogo
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#statistiche">
                            <i class="fas fa-chart-bar me-1"></i>Statistiche
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contatti">
                            <i class="fas fa-envelope me-1"></i>Contatti
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
