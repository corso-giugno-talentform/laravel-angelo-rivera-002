<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container">
        <a class="navbar-brand d-flex gap-2 hover-scale" href="index.html"><img
                src="https://img.icons8.com/?size=100&id=1s1OJiTLFx00&format=png&color=000000" width="30"
                height="30" alt="Logo" />Il mio Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Nascondi/Mostra menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active hover-scale" href="{{ route('homepage') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link hover-scale" href="404">Articoli</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link hover-scale" href="{{ route('contacts') }}">Contatti</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
