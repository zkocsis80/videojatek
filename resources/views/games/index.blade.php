@foreach ($games as $game)
    <div class="game">
        <h2>{{ $game->title }}</h2>
        <p>Category: {{ $game->category->name }}</p>
        <p>Average Rating: {{ $game->reviews->avg('rating') }}</p>
    </div>
@endforeach