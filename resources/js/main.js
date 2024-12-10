// Back to top button
const btnTop = document.getElementById('btnTop');

window.onscroll = function() {
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        btnTop.classList.add('show');
    } else {
        btnTop.classList.remove('show');
    }
};

btnTop.onclick = function() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
};





// lista racchette

document.addEventListener('DOMContentLoaded', function() {
    const container = document.getElementById('racchette-container');
    const loading = document.getElementById('loading');
    const errorMessage = document.getElementById('error-message');
    const filterLevel = document.getElementById('filterLevel');

    const showLoading = () => {
        loading.classList.remove('d-none');
        container.innerHTML = '';
        errorMessage.classList.add('d-none');
    };

    const hideLoading = () => {
        loading.classList.add('d-none');
    };

    const showError = (message) => {
        errorMessage.textContent = message || 'Si è verificato un errore nel caricamento delle racchette.';
        errorMessage.classList.remove('d-none');
        container.innerHTML = '';
    };

    async function fetchRacchette(level = '') {
        showLoading();

        try {
            const response = await fetch(`/api/racchette${level ? '?level=' + level : ''}`);
            const data = await response.json();

            if (!response.ok) {
                throw new Error(data.message || 'Errore nel caricamento dei dati');
            }

            renderRacchette(data.data);
        } catch (error) {
            console.error('Errore:', error);
            showError(error.message);
        } finally {
            hideLoading();
        }
    }

    function renderRacchette(racchette) {
        container.innerHTML = '';

        racchette.forEach(racchetta => {
            const card = `
                <div class="col-listaRacchette">
                    <div class="card-listaRacchette">
                        <img src="${racchetta.url.jpg.image_url}"
                             class="card-img-top-listaRacchette"
                             alt="${racchetta.title}"
                             loading="lazy">
                        <div class="card-body-listaRacchette">
                            <h5 class="card-title-listaRacchette">${racchetta.title}</h5>
                            <p class="card-text-listaRacchette">
                                <strong>Livello:</strong> ${racchetta.player_level}<br>
                                <strong>Peso:</strong> ${racchetta.specifications.weight_g}g<br>
                                <strong>Bilanciamento:</strong> ${racchetta.specifications.balance}
                            </p>

                            <div class="stats-listaRacchette">
                                <p class="mb-1"><strong>Controllo</strong></p>
                                <div class="stat-bar-listaRacchette">
                                    <div class="stat-value-listaRacchette" style="width: ${racchetta.playing_style.control * 10}%"></div>
                                </div>

                                <p class="mb-1"><strong>Potenza</strong></p>
                                <div class="stat-bar-listaRacchette">
                                    <div class="stat-value-listaRacchette" style="width: ${racchetta.playing_style.power * 10}%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer-listaRacchette text-center">
                            <a href="/dettaglio-racchetta/${racchetta.mal_id}" class="btn btn-primary btn-sm">Clicca qui per i dettagli</a>
                        </div>
                    </div>
                </div>
            `;
            container.innerHTML += card;
        });
    }

    filterLevel.addEventListener('change', (e) => {
        fetchRacchette(e.target.value);
    });

    fetchRacchette();
});





// dettaglio racchette

document.addEventListener('DOMContentLoaded', function() {
    // Ottieni l'ID della racchetta dall'URL
    const id = window.location.pathname.split('/').pop();

    async function fetchRacchettaDetails() {
        try {
            const response = await fetch(`/api/racchette/${id}`);
            const data = await response.json();

            if (!response.ok) {
                throw new Error(data.message || 'Errore nel caricamento dei dettagli');
            }

            renderDetails(data);
        } catch (error) {
            console.error('Errore:', error);
            document.querySelector('.container-dettaglioRacchetta').innerHTML = `
                <div class="alert alert-danger" role="alert">
                    Errore nel caricamento dei dettagli della racchetta. Riprova più tardi.
                </div>
            `;
        }
    }

    function renderDetails(racchetta) {
        // Immagine e titolo
        document.getElementById('racchetta-image').src = racchetta.url.jpg.image_url;
        document.getElementById('racchetta-image').alt = racchetta.title;
        document.getElementById('racchetta-title').textContent = racchetta.title;

        // Specifiche
        document.getElementById('length').textContent = racchetta.specifications.length_cm;
        document.getElementById('thickness').textContent = racchetta.specifications.thickness_mm;
        document.getElementById('weight').textContent = racchetta.specifications.weight_g;
        document.getElementById('balance').textContent = racchetta.specifications.balance;
        document.getElementById('frame').textContent = racchetta.specifications.frame;
        document.getElementById('faces').textContent = racchetta.specifications.faces;

        // Core
        document.getElementById('core-material').textContent = racchetta.core.material;
        const featuresList = document.getElementById('core-features');
        featuresList.innerHTML = racchetta.core.features
            .map(feature => `<li>${feature}</li>`)
            .join('');

        // Technologies
        const techContainer = document.getElementById('technologies-container');
        techContainer.innerHTML = racchetta.technologies
            .map(tech => `
                <div class="tech-card">
                    <h4>${tech.name}</h4>
                    <p>${tech.description}</p>
                </div>
            `)
            .join('');

        // Playing Style
        document.getElementById('control-bar').style.width = `${racchetta.playing_style.control * 10}%`;
        document.getElementById('power-bar').style.width = `${racchetta.playing_style.power * 10}%`;
        document.getElementById('maneuverability-bar').style.width = `${racchetta.playing_style.maneuverability * 10}%`;
        document.getElementById('comfort-bar').style.width = `${racchetta.playing_style.comfort * 10}%`;

        // Intended Use and Player Level
        document.getElementById('intended-use').textContent = racchetta.intended_use;
        document.getElementById('player-level').textContent = racchetta.player_level;

        // Aggiungi la classe per mostrare l'animazione delle barre
        document.querySelectorAll('.stat-value-dettaglioRacchetta').forEach(bar => {
            setTimeout(() => {
                bar.classList.add('animated');
            }, 100);
        });
    }

    // Aggiungi un pulsante per tornare alla lista
    const backButton = document.createElement('a');
    backButton.href = '/lista-racchette';
    backButton.className = 'btn btn-secondary mb-4';
    backButton.textContent = 'Torna alla lista';
    document.querySelector('.container-dettaglioRacchetta').insertBefore(
        backButton,
        document.querySelector('.container-dettaglioRacchetta').firstChild
    );

    // Carica i dettagli della racchetta
    fetchRacchettaDetails();
});