<a href="{{ route('games.create') }}">Create Game</a>
@foreach ($games as $game)
    <div class="game">
        <h2>{{ $game->title }}</h2>
        <p>Category: {{ $game->category->name }}</p>
        <p>Average Rating: {{ $game->reviews->avg('rating') }}</p>
        <a href="{{ route('games.edit', $game->id) }}">Edit</a>
    </div>
@endforeach