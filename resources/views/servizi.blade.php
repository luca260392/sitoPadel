<x-layout>
    <x-slot name="titolo">I Servizi del Padel Elite</x-slot>

    <!-- Header Section -->
    <header class="header-servizi">
        <div class="container text-white text-center">
            <h1 class="titolo-servizi">I Nostri Servizi Premium</h1>
            <p class="sottotitolo-servizi">Scopri come portare il tuo gioco al livello successivo</p>
        </div>
    </header>

    <!-- Services Introduction -->
    <section class="intro-servizi">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h4 class="descrizione-intro-servizi">Offriamo servizi personalizzati per giocatori di ogni livello, dal principiante al professionista.</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Services Section -->
    <main class="contenuto-servizi">
        <div class="container">
            <div class="row g-4">
                @foreach ($services as $service)
                <div class="col-lg-6">
                    <div class="card-servizi">
                        <div class="header-card-servizi">
                            <div class="icona-servizi">
                                <i class="{{ $service['icon'] }}"></i>
                            </div>
                            <h2 class="titolo-card-servizi">{{ $service['title'] }}</h2>
                        </div>

                        <div class="corpo-card-servizi">
                            <p class="descrizione-card-servizi">{{ $service['description'] }}</p>

                            <div class="caratteristiche-servizi">
                                <h3 class="titolo-caratteristiche-servizi">Caratteristiche Principali</h3>
                                <ul class="lista-caratteristiche-servizi">
                                    @foreach ($service['features'] as $feature)
                                        <li class="elemento-caratteristiche-servizi">
                                            <i class="fas fa-check-circle text-primary"></i>
                                            {{ $feature }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                            @if(isset($service['details']))
                            <div class="dettagli-servizi">
                                @foreach ($service['details'] as $title => $detail)
                                    <div class="elemento-dettagli-servizi">
                                        <h4 class="titolo-dettagli-servizi">{{ $title }}</h4>
                                        <p class="testo-dettagli-servizi">{{ $detail }}</p>
                                    </div>
                                @endforeach
                            </div>
                            @endif

                            <a href="{{ $service['button_link'] }}"
                               class="bottone-servizi">
                                {{ $service['button_text'] }}
                                <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </main>
</x-layout>