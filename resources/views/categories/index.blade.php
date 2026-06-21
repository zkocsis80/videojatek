<h1>Categories</h1>
<a href="{{ route('categories.create') }}">Create Category</a>
<ul>
    @foreach ($categories as $category)
        <li>
            <a href="{{ route('categories.show', $category->id) }}">{{ $category->name }}</a>
            <a href="{{ route('categories.edit', $category->id) }}">Edit</a>
            <span></span><form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </span>
        </li>
    @endforeach
</ul>