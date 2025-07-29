<div class="row justify-content-center">
    <div class="col-lg-8">
        {{ $slot }}
        <form class="" action="{{ route('send') }}" method="POST">
            @csrf
            {{ $id ?? '' }}
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome"
                    placeholder="{{ $form[0]['nome'] }}" autocomplete="off" value="{{ old('nome') }}">
                @error('nome')
                    <div class="alert alert-danger mt-4" role="alert">
                        {{ $message }}
                    </div>
                @enderror

            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email"
                    placeholder="{{ $form[0]['email'] }}" autocomplete="off" value="{{ old('email') }}">
                @error('email')
                    <div class="alert alert-danger mt-4" role="alert">
                        {{ $message }}
                    </div>
                @enderror

            </div>
            <div class="mb-3">
                <label for="messaggio" class="form-label">Messaggio</label>
                <textarea class="form-control" id="messaggio" name="msg" rows="5" placeholder="{{ $form[0]['messaggio'] }}"
                    autocomplete="off">{{ old('messaggio') }}</textarea>
                @error('messaggio')
                    <div class="alert alert-danger mt-4" role="alert">
                        {{ $message }}
                    </div>
                @enderror

            </div>
            <button type="submit" class="btn btn-primary w-100">Invia</button>
        </form>
    </div>
</div>
