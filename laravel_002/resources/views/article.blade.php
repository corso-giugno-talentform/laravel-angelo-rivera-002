<x-navbar />
<x-main />

<section class="jumbotron-posts mb-4" style="background-image: url('{{ $article['image'] }}')">
    <div class="container">
        <h1 class="display-4">{{ $article['titolo'] }}</h1>
        <p class="lead">{{ $article['descrizione'] }}
        </p>
    </div>
</section>

<section class="p-5 m-5 mb-5">
    <p class="fs-4 letter-spacing-3">{{ $article['descrizione-dett'] }}</p>
</section>

<div class="py-5 my-5 w-50 mx-auto">
    <x-form :form="$form" />
</div>
<x-footer />
