<!-- Form to create a new page -->
<form action="{{ route('pages.store') }}" method="post">
    @csrf
    <label>Title:</label>
    <input type="text" name="title" required>
    <label>Content:</label>
    <textarea name="content" required></textarea>
    <button type="submit">Create Page</button>
</form>
