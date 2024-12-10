<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->name('homepage');


Route::get('/servizi', function(){
    $services = [
        [
            'title' => 'Consulenza Tecnica',
            'description' => 'Analisi personalizzata del tuo stile di gioco con suggerimenti specifici per migliorare la tua tecnica.',
            'features' => [
                'Analisi video del tuo gioco',
                'Consigli personalizzati',
                'Piano di miglioramento'
            ],
            'button_text' => 'Prenota Consulenza',
            'button_link' => '#',
            'icon' => 'fa-solid fa-gears',
                'details' => [
                    'Come funziona' => 'I nostri esperti analizzeranno il tuo gioco attraverso video sessioni, identificando punti di forza e aree di miglioramento.',
                    'Cosa include' => 'Sessione di analisi video, report dettagliato, piano di allenamento personalizzato, follow-up mensile.',
                    'Benefici' => 'Migliora rapidamente il tuo gioco con feedback professionali mirati alle tue specifiche esigenze.'
                ]
        ],
        [
            'title' => 'Video Tutorial Premium',
            'description' => 'Accesso esclusivo alla nostra libreria di video tutorial avanzati con tecniche professionali.',
            'features' => [
                'Tutorial esclusivi',
                'Aggiornamenti settimanali',
                'Contenuti in HD'
            ],
            'button_text' => 'Abbonati Ora',
            'button_link' => '#',
            'icon' => 'fas fa-video',
            'details' => [
                'Contenuti Disponibili' => 'Oltre 200 video tutorial organizzati per livello e tecnica, dalle basi fino alle strategie avanzate. Nuovi contenuti aggiunti settimanalmente con focus su tecniche specifiche.',
                'Qualità e Formato' => 'Video in alta definizione (1080p) con riprese multi-angolo, replay al rallentatore e analisi dettagliate. Disponibili su qualsiasi dispositivo, anche offline.',
                'Vantaggi Premium' => 'Accesso anticipato ai nuovi contenuti, sezione domande e risposte con i nostri esperti, download illimitato dei video per la visione offline.'
            ]
        ],
        [
            'title' => 'Equipment Review',
            'description' => 'Test e recensioni approfondite dell\'attrezzatura più recente sul mercato.',
            'features' => [
                'Recensioni imparziali',
                'Test sul campo',
                'Confronti dettagliati'
            ],
            'button_text' => 'Leggi Recensioni',
            'button_link' => '#',
            'icon' => 'fas fa-clipboard-check',
            'details' => [
                'Metodologia di Test' => 'Ogni prodotto viene testato per almeno 20 ore di gioco da giocatori di diversi livelli. Valutiamo potenza, controllo, maneggevolezza e durabilità in condizioni reali.',
                'Cosa Analizziamo' => 'Caratteristiche tecniche complete, comparazione con modelli simili, rapporto qualità-prezzo, adattabilità a diversi stili di gioco e livelli di esperienza.',
                'Aggiornamenti' => 'Database costantemente aggiornato con le ultime uscite, follow-up a lungo termine per valutare la durabilità, classifiche periodiche dei migliori prodotti per categoria.'
            ]
        ],
        [
            'title' => 'Community Premium',
            'description' => 'Unisciti alla nostra community esclusiva per discutere e migliorare insieme.',
            'features' => [
                'Forum dedicato',
                'Eventi esclusivi',
                'Supporto prioritario'
            ],
            'button_text' => 'Unisciti Ora',
            'button_link' => '#',
            'icon' => 'fas fa-users',
            'details' => [
                'Vantaggi della Community' => 'Accesso a un forum esclusivo moderato da esperti, possibilità di organizzare partite con altri membri, condivisione di esperienze e consigli tra appassionati.',
                'Eventi Speciali' => 'Partecipazione prioritaria ai tornei organizzati, clinic esclusivi con giocatori professionisti, sconti speciali su attrezzatura e servizi partner.',
                'Supporto Dedicato' => 'Assistenza personalizzata 7 giorni su 7, consulenza tecnica prioritaria, possibilità di richiedere analisi video veloci del proprio gioco.'
            ]
        ]
    ];
    return view('servizi', ['services' => $services]);
})->name('servizi');


Route::get('/chi-siamo', function(){
    $users = [
        ['name' => 'Marco', 'surname' => 'Rossi', 'role' => 'Fondatore & Head Coach', 'description' => 'Ex giocatore professionista con 10 anni di esperienza nel padel', 'image' => 'media/chi-siamo1.jpg'],
        ['name' => 'Laura', 'surname' => 'Bianchi', 'role' => 'Content Manager', 'description' => 'Specialista in strategie di contenuto sportivo e social media', 'image' => 'media/chi-siamo2.jpg'],
        ['name' => 'Luigi', 'surname' => 'Verdi', 'role' => 'Technical Advisor', 'description' => 'Esperto in analisi tecnica e recensioni di attrezzature e abbigliamento', 'image' => 'media/chi-siamo3.jpg']
    ];
    return view('chi-siamo', ['users' => $users]);
})->name('chiSiamo');


Route::get('/chi-siamo/dettagli/{name}', function($name){
    $users = [
        ['name' => 'Marco', 'surname' => 'Rossi', 'role' => 'Fondatore & Head Coach', 'description' => 'Ex giocatore professionista con 10 anni di esperienza nel padel', 'image' => '/media/chi-siamo1.jpg'],
        ['name' => 'Laura', 'surname' => 'Bianchi', 'role' => 'Content Manager', 'description' => 'Specialista in strategie di contenuto sportivo e social media', 'image' => '/media/chi-siamo2.jpg'],
        ['name' => 'Luigi', 'surname' => 'Verdi', 'role' => 'Technical Advisor', 'description' => 'Esperto in analisi tecnica e recensioni di attrezzature e abbigliamento', 'image' => '/media/chi-siamo3.jpg']
    ];
    foreach($users as $user){
        if($name == $user['name']){
            return view('chi-siamo-dettagli', ['user'=>$user]);
        }
    }
})->name('chiSiamoDettagli');


Route::get('/contatti', [ContactController::class, 'contatti'])->name('contatti');
Route::post('/contatti/invia', [ContactController::class, 'invia'])->name('contatti.invia');


Route::get('/lista-racchette', function () {
    return view('listaRacchette');
})->name('listaRacchette');


Route::get('/dettaglio-racchetta/{id}', function ($id) {
    return view('dettaglioRacchetta');
})->name('dettaglio.racchetta');