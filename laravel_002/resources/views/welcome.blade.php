<x-main />
<x-navbar />

<section class="jumbotron-hero mb-4">
    <div class="container">
        <h1 class="display-4">Benvenuto nel mio Blog</h1>
        <p class="lead">Una grande introduzione o immagine di copertina che si estende oltre il normale contenuto.
        </p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Inizia a leggere</a>
    </div>
</section>

<!-- Contenuto principale -->
<main class="flex-fill container p-3 py-5 mb-4">
    <!-- Sezione degli articoli -->
    <div class="py-5 row">
        <!-- Articoli -->
        @foreach ($articles as $article)
            <div class="col-md-4 mb-4">
                <x-card :article="$article" :isDetail="false" />
            </div>
        @endforeach

    </div>
    <!-- Sezione di altri post -->
    <h2 class="mt-5 mb-4">Altri Post</h2>
    <div class="list-group">
        @foreach ($posts as $post)
            <x-posts :post="$post" />
        @endforeach
    </div>
</main>

<x-footer />
