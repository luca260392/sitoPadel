
<x-layout>

    <x-slot name="titolo">
        Catalogo Racchette
    </x-slot>

    <!-- Navbar -->
    {{-- x-navbar --}}

    <div class="container-listaRacchette my-5">
        <h1 class="text-center-listaRacchette mb-4">Catalogo Racchette</h1>

        {{-- Filtri --}}
        <div class="row-listaRacchette mb-4">
            <div class="col-md-4">
                <select class="form-select-listaRacchette" id="filterLevel">
                    <option value="">Filtra per Livello</option>
                    <option value="ALTO">Livello Alto</option>
                    <option value="MEDIO">Livello Medio</option>
                    <option value="PRINCIPIANTE">Principiante</option>
                </select>
            </div>
        </div>

        {{-- Loading Spinner --}}
        <div id="loading" class="spinner-listaRacchette d-none">
            <div class="spinner-border-listaRacchette text-primary" role="status">
                <span class="visually-hidden">Caricamento...</span>
            </div>
        </div>

        {{-- Container Racchette --}}
        <div class="row-listaRacchette" id="racchette-container">
            <!-- Le racchette verranno inserite qui dinamicamente tramite js-->
        </div>

        {{-- Message Error --}}
        <div id="error-message" class="alert-listaRacchette alert-danger-listaRacchette d-none" role="alert">
            Si è verificato un errore nel caricamento delle racchette.
        </div>
    </div>

    <!-- Footer -->
    {{-- x-footer --}}

</x-layout>