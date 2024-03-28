<li>
    <div class="card mb-2">
        <div class="card-body">
            <span>Categoria: {{ $categoria }}</span>
                <!-- perchè non prende la classe titolo?? -->
            <h4 class="titolo"><a href="{{ route('articolo', $index )}}">{{ $titolo }}</a></h4> 
            <p>{{ $descrizione }}</p>
            <div class="text-end">
                    <a class="stretched-link" href="{{ route('articolo', $index )}}">Leggi</a>
            </div>
        </div>
    </div>
</li>