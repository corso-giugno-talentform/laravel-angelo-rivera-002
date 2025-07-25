<x-main />
<x-navbar />
<!-- Sezione contatti -->
<div class="container my-5">
    <h1 class="text-center mb-4">Contattaci</h1>
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <form>
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" placeholder="Inserisci il tuo nome" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="nome@esempio.com" required>
                </div>
                <div class="mb-3">
                    <label for="messaggio" class="form-label">Messaggio</label>
                    <textarea class="form-control" id="messaggio" rows="5" placeholder="Scrivi il tuo messaggio" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100">Invia</button>
            </form>
        </div>
    </div>

    <!-- Informazioni di contatto -->
    <div class="row mt-5">
        <div class="col-md-4 text-center mb-4">
            <div class="card h-100 shadow-sm hover-scale">
                <div class="card-body">
                    <h5 class="card-title">Telefono</h5>
                    <p class="card-text">+39 123 456 7890</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-center mb-4">
            <div class="card h-100 shadow-sm hover-scale">
                <div class="card-body">
                    <h5 class="card-title">Email</h5>
                    <p class="card-text">info@iltuosito.it</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-center mb-4">
            <div class="card h-100 shadow-sm hover-scale">
                <h5 class="card-title ">Indirizzo</h5>
                <div class="card-body">
                    <p class="card-text">Via Roma 123, 00100 Roma, Italia</p>
                </div>
            </div>
        </div>
    </div>
</div>
<x-footer />
