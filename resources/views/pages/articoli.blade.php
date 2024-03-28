<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home</title>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> 
</head>
<body>
    <div class="container">
<x-navbar /> 
<h1 class="container" style="text-align: center">Articoli</h1>  

<!-- {{-- <img src="{{ asset('img/file.jpg') }}" alt=""> --}} -->

<div class="container">
    @if($articoli)
    <ul class="list-unstyled">
        @foreach($articoli as $index => $articolo)
    <!-- {{-- @if( $articolo['visible']) NON FUNZIA --}} -->
    <x-card 
        :categoria="$articolo['categoria']" 
        :titolo="$articolo['titolo']"
        :descrizione="$articolo['descrizione']"
        :index="$index"
        :route="route('articolo', $index)"
    />
        @endforeach
    </ul>
    @else
    <p>Non ci sono articoli disponibili</p>
    @endif 
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>