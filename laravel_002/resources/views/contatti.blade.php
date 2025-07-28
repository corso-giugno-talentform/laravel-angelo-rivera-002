<x-main />
<x-navbar />
<!-- Sezione contatti -->
<div class="container my-5">
    <h1 class="text-center mb-4">Contattaci</h1>
    <x-form :form="$form" />

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
