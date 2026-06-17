<div class="game"></div>
    <h2>{{ $game->title }}</h2>
    <p>Category: {{ $game->category->name }}</p>
    <p>Average Rating: {{ $game->reviews->avg('rating') }}</p>
</div>