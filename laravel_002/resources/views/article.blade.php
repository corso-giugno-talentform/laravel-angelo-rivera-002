<x-navbar />
<x-main />
<section class="jumbotron-posts mb-4" style="background-image: url('{{ $article['image'] }}')">
    <div class="container">
        <h1 class="display-4">{{ $article['titolo'] }}</h1>
        <p class="lead">{{ $article['descrizione'] }}
        </p>
    </div>
</section>

<section class="container p-5 my-5 bg-colorful rounded-4">
    <p class="p-5 fs-4 letter-spacing-3">{{ $article['descrizione-dett'] }}</p>
</section>

<div class="modal fade" id="rvwarticle" tabindex="-1" aria-labelledby="review-article" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Un pensiero su questo articolo</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <x-form :form="$form">
                    <x-slot name="id">
                        <input type="hidden" id="form_id" name="form_id" value="1">
                    </x-slot>
                </x-form>
            </div>
        </div>
    </div>
</div>


<div class="py-5 my-5 mx-auto">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#rvwarticle"
        data-bs-whatever="review-article">Scrivici un tuo pensiero su questo articolo</button>
</div>
<x-footer />
