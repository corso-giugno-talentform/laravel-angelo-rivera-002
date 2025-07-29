<div class="row justify-content-center">
    <div class="col-lg-8">
        @if (session('success'))
            <x-alert color="alert-success"> {{ session('success') }}</x-alert>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {{ $slot }}
        <form class="" action="{{ route('send') }}" method="POST">
            @csrf
            {{ $id ?? '' }}
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control @error('nome') is-invalid @enderror" id="nome"
                    name="nome" placeholder="{{ $form[0]['nome'] }}" autocomplete="off" value="{{ old('nome') }}">

            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                    name="email" placeholder="{{ $form[0]['email'] }}" autocomplete="off" value="{{ old('email') }}">

            </div>
            <div class="mb-3">
                <label for="messaggio" class="form-label">Messaggio</label>
                <textarea class="form-control @error('msg') is-invalid @enderror" id="messaggio" name="msg" rows="5"
                    placeholder="{{ $form[0]['messaggio'] }}" autocomplete="off">{{ old('msg') }}</textarea>

            </div>
            <button type="submit" class="btn btn-primary w-100">Invia</button>
        </form>
    </div>
</div>
