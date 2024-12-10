
<x-layout>

    <x-slot name="titolo">
        Catalogo Racchette
    </x-slot>

    <!-- Navbar -->
    {{-- x-navbar --}}


    <div class="container-dettaglioRacchetta my-5">
        <div class="row">
            {{-- Immagine --}}
            <div class="col-12 col-md-6">
                <div class="img-container-dettaglioRacchetta">
                    <img id="racchetta-image" src="" alt="" class="img-fluid-dettaglioRacchetta">
                </div>
            </div>

            {{-- Dettagli --}}
            <div class="col-12 col-md-6">
                <h1 id="racchetta-title" class="title-dettaglioRacchetta"></h1>
                <div class="specifications-dettaglioRacchetta mt-4">
                    <h3>Specifiche Tecniche</h3>
                    <ul class="list-unstyled">
                        <li><strong>Lunghezza:</strong> <span id="length"></span> cm</li>
                        <li><strong>Spessore:</strong> <span id="thickness"></span> mm</li>
                        <li><strong>Peso:</strong> <span id="weight"></span> g</li>
                        <li><strong>Bilanciamento:</strong> <span id="balance"></span></li>
                        <li><strong>Telaio:</strong> <span id="frame"></span></li>
                        <li><strong>Facce:</strong> <span id="faces"></span></li>
                    </ul>
                </div>

                <div class="core-dettaglioRacchetta mt-4">
                    <h3>Caratteristiche Core</h3>
                    <p><strong>Materiale:</strong> <span id="core-material"></span></p>
                    <ul id="core-features" class="features-list-dettaglioRacchetta">
                    </ul>
                </div>

                <div class="technologies-dettaglioRacchetta mt-4">
                    <h3>Tecnologie</h3>
                    <div id="technologies-container">
                    </div>
                </div>

                <div class="playstyle-dettaglioRacchetta mt-4">
                    <h3>Stile di Gioco</h3>
                    <div class="stats-container">
                        <div class="stat-row">
                            <span>Controllo</span>
                            <div class="stat-bar-dettaglioRacchetta">
                                <div id="control-bar" class="stat-value-dettaglioRacchetta"></div>
                            </div>
                        </div>
                        <div class="stat-row">
                            <span>Potenza</span>
                            <div class="stat-bar-dettaglioRacchetta">
                                <div id="power-bar" class="stat-value-dettaglioRacchetta"></div>
                            </div>
                        </div>
                        <div class="stat-row">
                            <span>Maneggevolezza</span>
                            <div class="stat-bar-dettaglioRacchetta">
                                <div id="maneuverability-bar" class="stat-value-dettaglioRacchetta"></div>
                            </div>
                        </div>
                        <div class="stat-row">
                            <span>Comfort</span>
                            <div class="stat-bar-dettaglioRacchetta">
                                <div id="comfort-bar" class="stat-value-dettaglioRacchetta"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="use-dettaglioRacchetta mt-4">
                    <h3>Utilizzo Consigliato</h3>
                    <p id="intended-use"></p>
                    <p><strong>Livello Giocatore:</strong> <span id="player-level"></span></p>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer -->
    {{-- x-footer --}}

</x-layout>