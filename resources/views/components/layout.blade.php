
{{-- qui i codici ripetuti che rimangono uguali --}}


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- coalescing operator per i titoli delle pagine --}}
    <title>{{$titolo}}</title>

    {{-- font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Fredoka:wght@300..700&family=Lexend:wght@100..900&family=Oswald:wght@200..700&   family=Ramabhadra&display=swap" rel="stylesheet">

    {{-- icon --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    {{-- recupera i file css e js per metterli a disposizione del client --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>


<body>
    <x-navbar/>
    {{-- per la navbar usare tag autoconclusivo perché all'interno non si aggiungerà nulla, al contrario di x-layout --}}

    {{$slot}}

    <x-footer/>



</body>
</html>