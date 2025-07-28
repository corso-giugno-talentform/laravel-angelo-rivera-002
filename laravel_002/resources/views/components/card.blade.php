<div class="card hover-scale">
    <div class="card h-100">
        <img src="{{ $article['image'] }}" class="card-img-top" width="50" height="300" alt="">
        <div class="grid py-3 gap-4 mx-5 text-center">
            <h5 class="card-title">{{ $article['titolo'] }}</h5>
            <p class="card-text">{{ $article['descrizione'] }}</p>
            <a href="{{ route('article', ['article' => $article['slug']]) }}" class="mt-auto btn btn-primary">Leggi
                di
                piu</a>
        </div>
    </div>
</div>
