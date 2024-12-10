# Descrizione sito

Il sito si propone di usare le rotte e i controller di laravel per collegare la vista di alcuni oggetti (in questo caso un catalogo di racchette da padel).
Il catologo è composto da cards collegate alle direttive inserite nell' ApiController, in modo che abbiano anche livelli diversi di dinammicità in base alle loro caratteristiche.
Il sito è anche implementato lato frontend con dei filtri creati con js e vari stili di bootstrap e css. Solo alcune pagine hanno i collegamenti funzionanti.





# Implementare un sistema completo per i servizi partendo dall'architettura fino ai dettagli implementativi

Questo sistema offre:

1. Gestione completa dei servizi con dettagli e caratteristiche
2. Sistema di prenotazione in tempo reale
3. Notifiche email automatiche
4. API per integrazioni esterne
5. Interfaccia utente reattiva con Livewire
6. Gestione degli stati delle prenotazioni
7. Sistema di notifiche flessibile



- Architettura Database
Progettare il database con diverse tabelle:
// Database/Migrations/create_services_table.php
public function up()
{
    Schema::create('services', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->text('description');
        $table->string('icon');
        $table->string('button_text');
        $table->string('button_link');
        $table->timestamps();
    });

    Schema::create('service_features', function (Blueprint $table) {
        $table->id();
        $table->foreignId('service_id')->constrained()->onDelete('cascade');
        $table->string('feature');
        $table->timestamps();
    });

    Schema::create('service_details', function (Blueprint $table) {
        $table->id();
        $table->foreignId('service_id')->constrained()->onDelete('cascade');
        $table->string('title');
        $table->text('content');
        $table->timestamps();
    });

    Schema::create('bookings', function (Blueprint $table) {
        $table->id();
        $table->foreignId('service_id')->constrained();
        $table->foreignId('user_id')->constrained();
        $table->dateTime('booking_date');
        $table->string('status');
        $table->text('notes')->nullable();
        $table->timestamps();
    });
}



- Modelli Eloquent
Creiare i modelli con le relative relazioni:
// app/Models/Service.php
class Service extends Model
{
    protected $fillable = ['title', 'description', 'icon', 'button_text', 'button_link'];

    public function features()
    {
        return $this->hasMany(ServiceFeature::class);
    }

    public function details()
    {
        return $this->hasMany(ServiceDetail::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
Altri modelli simili per ServiceFeature, ServiceDetail, Booking



- Controller e Logica di Business
Implementare un controller completo per gestire tutte le operazioni:
// app/Http/Controllers/ServiceController.php
class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::with(['features', 'details'])->get();
        return view('servizi.index', compact('services'));
    }

    public function show(Service $service)
    {
        $service->load(['features', 'details']);
        return view('servizi.show', compact('service'));
    }

    public function book(Service $service, Request $request)
    {
        $validated = $request->validate([
            'booking_date' => 'required|date|after:today',
            'notes' => 'nullable|string'
        ]);

        $booking = $service->bookings()->create([
            'user_id' => auth()->id(),
            'booking_date' => $validated['booking_date'],
            'status' => 'pending',
            'notes' => $validated['notes']
        ]);

        // Invia email di conferma
        Mail::to(auth()->user()->email)->send(new BookingConfirmation($booking));

        return redirect()->route('servizi.booking.success');
    }
}



- Componente Livewire per Prenotazioni
Per gestire le prenotazioni in modo dinamico:
phpCopy// app/Http/Livewire/ServiceBooking.php
class ServiceBooking extends Component
{
    public $service;
    public $bookingDate;
    public $notes;

    public function mount(Service $service)
    {
        $this->service = $service;
    }

    public function book()
    {
        $this->validate([
            'bookingDate' => 'required|date|after:today',
            'notes' => 'nullable|string'
        ]);

        // Logica di prenotazione
        $booking = $this->service->bookings()->create([
            'user_id' => auth()->id(),
            'booking_date' => $this->bookingDate,
            'status' => 'pending',
            'notes' => $this->notes
        ]);

        $this->emit('bookingSuccess');
    }

    public function render()
    {
        return view('livewire.service-booking');
    }
}



- API per Integrazioni
Per consentire integrazioni esterne:
// routes/api.php
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/services', [ServiceApiController::class, 'index']);
    Route::post('/services/{service}/book', [ServiceApiController::class, 'book']);
});



- Sistema di Notifiche
Per gestire le comunicazioni con gli utenti:
// app/Notifications/BookingConfirmation.php
class BookingConfirmation extends Notification
{
    public $booking;

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Conferma Prenotazione Servizio')
            ->markdown('emails.bookings.confirmation', [
                'booking' => $this->booking
            ]);
    }
}



- Gestione degli Eventi
Per mantenere il codice modulare:
// app/Events/BookingCreated.php
class BookingCreated
{
    use Dispatchable, SerializesModels;

    public $booking;

    public function __construct(Booking $booking)
    {
        $this->booking = $booking;
    }
}

// app/Listeners/SendBookingConfirmation.php
class SendBookingConfirmation
{
    public function handle(BookingCreated $event)
    {
        $event->booking->user->notify(new BookingConfirmation($event->booking));
    }
}