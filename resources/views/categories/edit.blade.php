<form action="{{ route('categories.update', $category->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="name">Category Name:</label>
        <input type="text" name="name" id="name" value="{{ $category->name }}" required>
    </div>
    <button type="submit">Update Category</button>
</form>
<br>    
<a href="{{ route('categories.index') }}">Back to Categories</a>