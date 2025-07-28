<div class="row justify-content-center">
    <div class="col-lg-8">
        <form class="" action="#" method="POST">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome"
                    placeholder="{{ $form[0]['nome'] }}" required autocomplete="off">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email"
                    placeholder="{{ $form[0]['email'] }}" required autocomplete="off">
            </div>
            <div class="mb-3">
                <label for="messaggio" class="form-label">Messaggio</label>
                <textarea class="form-control" id="messaggio" name="msg" rows="5" placeholder="{{ $form[0]['messaggio'] }}"
                    required autocomplete="off"></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100">Invia</button>
        </form>
    </div>
</div>
