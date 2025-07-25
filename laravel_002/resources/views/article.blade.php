<x-navbar />
<x-main />
<section>
    <div class="px-4 py-5 my-5 text-center">
        <h1 class="display-5 fw-bold text-body-emphasis">Articolo</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ $article['image'] }}" alt="">
                        <h5 class="card-title">{{ $article['titolo'] }}</h5>
                        <p class="card-text">{{ $article['descrizione'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
