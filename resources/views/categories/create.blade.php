<form action="{{ route('categories.store') }}" method="POST">
    @csrf
    <div>
        <label for="name">Category Name:</label>
        <input type="text" name="name" id="name" required>
    </div>
    <button type="submit">Create Category</button>
</form>