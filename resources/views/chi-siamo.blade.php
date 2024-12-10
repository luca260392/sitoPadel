<x-layout>

    <x-slot name="titolo">
        Chi siamo - Padel Blog
    </x-slot>

    <!-- Navbar -->
    {{-- x-navbar --}}

    <!-- Header -->
    <header class="header d-flex align-items-center">
        <div class="container text-white text-center">
            <h1 class="display-1 fw-bold">Chi Siamo</h1>
            <p class="lead fw-bold">Il Blog del Padel</p>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container py-5">
        <!-- Storia -->
        <section class="mb-5">
            <h2 class="text-center mb-4">La Nostra Storia</h2>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <p class="lead text-center">
                        Fondato nel 2020, Padel Blog nasce dalla passione di un gruppo di giocatori professionisti
                        con l'obiettivo di condividere conoscenze ed esperienze nel mondo del padel.
                    </p>
                </div>
            </div>
        </section>

        <!-- Team -->
        <section class="mb-5">
            <h2 class="text-center mb-4">Il Nostro Team</h2>
            <div class="row g-4">

                <!-- Team Member -->
                @foreach ($users as $user)
                <div class="col-12 col-md-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="{{ asset($user['image']) }}" alt="{{ $user['name'] }}" class="profile-image">
                            <h5 class="card-title pt-4">{{$user['name'] . " " . $user['surname']}}</h5>
                            <p class="card-text text-muted">{{$user['role']}}</p>
                            <p class="card-text">{{$user['description']}}</p>
                            <a href="{{route('chiSiamoDettagli', ['name'=>$user['name']])}}" class="btn-secondary">Clicca qui per i dettagli</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>

        <!-- Mission -->
        <section class="mission-section py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="mission-card p-5 rounded-4 shadow-lg">
                            <div class="row align-items-center">
                                <div class="col-md-4 mb-4 mb-md-0">
                                    <div class="mission-icon-wrapper text-center">
                                        <i class="fas fa-flag mission-icon"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h3 class="mission-title mb-4">La Nostra Missione</h3>
                                    <p class="mission-text mb-4">
                                        Vogliamo essere il punto di riferimento per tutti gli appassionati di padel,
                                        dai principianti ai professionisti, offrendo contenuti di qualità e supporto
                                        per migliorare il loro gioco.
                                    </p>
                                    <div class="mission-stats row text-center g-3">
                                        <div class="col-4">
                                            <div class="stat-item">
                                                <h4 class="stat-number">500+</h4>
                                                <p class="stat-label">Articoli</p>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="stat-item">
                                                <h4 class="stat-number">10k+</h4>
                                                <p class="stat-label">Lettori</p>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="stat-item">
                                                <h4 class="stat-number">100+</h4>
                                                <p class="stat-label">Tutorial</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


    <!-- Footer -->
    {{-- x-footer --}}


</x-layout>