<x-layout>

    <x-slot name="titolo">
        Contatta il Padel Blog
    </x-slot>

    <!-- Navbar -->
    {{-- x-navbar --}}


    <div class="container py-5">
        <!-- Header Section -->
        <div class="row mb-5 text-center">
            <div class="col-lg-8 mx-auto">
                <h1 class="display-4 fw-bold mb-3">Contattaci</h1>
                <p class="lead text-muted">Siamo qui per aiutarti. Compila il form sottostante e ti risponderemo il prima possibile.</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <!-- Form Section -->
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm rounded-4 p-4">
                    <div class="card-body">
                        <form action="{{ route('contatti.invia') }}" method="POST">
                            @csrf
                            <div class="row g-3">
                                <!-- Nome e Email -->
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Il tuo nome" required>
                                        <label for="nome">Nome</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="La tua email" required>
                                        <label for="email">Email</label>
                                    </div>
                                </div>

                                <!-- Telefono e Oggetto -->
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Il tuo telefono">
                                        <label for="telefono">Telefono</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="oggetto" name="oggetto" placeholder="Oggetto del messaggio" required>
                                        <label for="oggetto">Oggetto</label>
                                    </div>
                                </div>

                                <!-- Messaggio -->
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" id="messaggio" name="messaggio" style="height: 150px" placeholder="Il tuo messaggio" required></textarea>
                                        <label for="messaggio">Messaggio</label>
                                    </div>
                                </div>

                                <!-- Privacy Checkbox -->
                                <div class="col-12">
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" id="privacy" name="privacy" required>
                                        <label class="form-check-label text-muted" for="privacy">
                                            Accetto il trattamento dei dati personali
                                        </label>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-lg w-100 rounded-5">
                                        Invia Messaggio
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Info Cards -->
            <div class="row g-4 mt-5">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm rounded-4 text-center p-4 info-card">
                        <div class="card-body">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <h5 class="card-title">Indirizzo</h5>
                            <p class="card-text text-muted">Via Example 123, Roma</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm rounded-4 text-center p-4 info-card">
                        <div class="card-body">
                            <div class="contact-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <h5 class="card-title">Telefono</h5>
                            <p class="card-text text-muted">+39 123 456 7890</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm rounded-4 text-center p-4 info-card">
                        <div class="card-body">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <h5 class="card-title">Email</h5>
                            <p class="card-text text-muted">info@example.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Footer -->
{{-- x-footer --}}

</x-layout>