<x-layout>

    <x-slot name="titolo">
        Il Padel Club
    </x-slot>

    <!-- Navbar -->
    {{-- x-navbar --}}

    <!-- Header Section -->
    <header class="header d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h1 class="hero-title mb-4">Vivi la Passione del Padel</h1>
                    <p class="hero-subtitle mb-5">Scopri tecniche avanzate, recensioni e una community di appassionati</p>
                    <div class="hero-cta">
                        <a href="/servizi" class="btn btn-primary btn-lg rounded-pill me-3">Esplora i Servizi</a>
                        <a href="/contatti" class="btn btn-outline-light btn-lg rounded-pill">Contattaci</a>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <!-- Featured Services -->
    <section class="services-section py-5">
    <div class="container">
        <h2 class="section-title text-center mb-5">I Nostri Servizi Premium</h2>
        <div class="row g-4">
            <!-- Consulenza Tecnica -->
            <div class="col-lg-3 col-md-6">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fa-solid fa-gears"></i>
                    </div>
                    <h3>Consulenza Tecnica</h3>
                    <p class="service-description">Analisi personalizzata del tuo stile di gioco con suggerimenti specifici per migliorare la tua tecnica.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check-circle me-1"></i>Analisi video del tuo gioco</li>
                        <li><i class="fas fa-check-circle me-1"></i>Consigli personalizzati</li>
                        <li><i class="fas fa-check-circle me-1"></i>Piano di miglioramento</li>
                    </ul>
                    <a href="/servizi/consulenza" class="btn-secondary">Prenota Consulenza</a>
                </div>
            </div>

            <!-- Video Tutorial Premium -->
            <div class="col-lg-3 col-md-6">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-video"></i>
                    </div>
                    <h3>Video Tutorial Premium</h3>
                    <p class="service-description">Accesso esclusivo alla nostra libreria di video tutorial avanzati con tecniche professionali.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check-circle me-1"></i>Tutorial esclusivi</li>
                        <li><i class="fas fa-check-circle me-1"></i>Aggiornamenti settimanali</li>
                        <li><i class="fas fa-check-circle me-1"></i>Contenuti in HD</li>
                    </ul>
                    <a href="/servizi/tutorial" class="btn-secondary">Abbonati Ora</a>
                </div>
            </div>

            <!-- Equipment Review -->
            <div class="col-lg-3 col-md-6">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-clipboard-check"></i>
                    </div>
                    <h3>Equipment Review</h3>
                    <p class="service-description">Test e recensioni approfondite dell'attrezzatura più recente sul mercato.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check-circle me-1"></i>Recensioni imparziali</li>
                        <li><i class="fas fa-check-circle me-1"></i>Test sul campo</li>
                        <li><i class="fas fa-check-circle me-1"></i>Confronti dettagliati</li>
                    </ul>
                    <a href="/servizi/recensioni" class="btn-secondary">Leggi Recensioni</a>
                </div>
            </div>

            <!-- Community Premium -->
            <div class="col-lg-3 col-md-6">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Community Premium</h3>
                    <p class="service-description">Unisciti alla nostra community esclusiva per discutere e migliorare insieme.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check-circle me-1"></i>Forum dedicato</li>
                        <li><i class="fas fa-check-circle me-1"></i>Eventi esclusivi</li>
                        <li><i class="fas fa-check-circle me-1"></i>Supporto prioritario</li>
                    </ul>
                    <a href="/servizi/community" class="btn-secondary">Unisciti Ora</a>
                </div>
            </div>
        </div>
    </div>
</section>


    <!-- Latest Articles -->
    <section class="articles-section py-5 bg-light">
        <div class="container">
            <h2 class="section-title text-center mb-5">Ultimi Articoli</h2>
            <div class="row g-4">
                <!-- Article Card 1 -->
                <div class="col-md-4">
                    <article class="content-card">
                        <div class="card-image">
                            <img src="/media/bandeja.jpg" alt="Tecnica Padel" class="img-fluid">
                            <div class="card-category">Tecnica</div>
                        </div>
                        <div class="article-content">
                            <h3 class="article-title">Come Migliorare la tua bandeja</h3>
                            <p>Scopri i segreti per perfezionare uno dei colpi più famosi del padel...</p>
                            <a href="#" class="article-link">Leggi l'articolo
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </article>
                </div>

                <div class="col-md-4">
                    <article class="article-card">
                        <div class="article-image">
                            <img src="/media/racchette.jpg" class="img-fluid" alt="Attrezzatura Padel">
                            <div class="category-badge">Attrezzatura</div>
                        </div>
                        <div class="article-content">
                            <h3 class="article-title">Le Migliori Racchette</h3>
                            <p class="article-excerpt">Guida completa alla scelta della racchetta perfetta per il tuo stile di gioco. Scopri quale si adatta meglio alle tue caratteristiche.</p>
                            <a href="{{ route('listaRacchette') }}" class="article-link">
                                Guarda il catalogo
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- Community Section -->
    <section class="community-section py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img src="/media/community.jpg" alt="Community Padel" class="img-fluid rounded shadow">
                </div>
                <div class="col-lg-6">
                    <div class="community-content ps-lg-5">
                        <h2 class="section-title">Unisciti alla Nostra Community</h2>
                        <p class="section-description">Entra a far parte di una community appassionata di padel. Condividi esperienze, partecipa a eventi esclusivi e migliora il tuo gioco insieme a noi.</p>
                        <ul class="community-features">
                            <li>Forum dedicato ai membri</li>
                            <li>Eventi esclusivi mensili</li>
                            <li>Supporto tecnico prioritario</li>
                        </ul>
                        <a href="/community" class="btn btn-primary rounded-pill">Unisciti Ora</a>
                    </div>
                </div>
            </div>
        </div>
    </section

    <!-- Footer -->
    {{-- x-footer --}}

</x-layout>