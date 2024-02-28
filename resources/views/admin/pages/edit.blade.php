<!-- Form to edit a page -->
<form action="{{ route('pages.update', $page) }}" method="post">
    @csrf
    @method('PUT')
    <label>Title:</label>
    <input type="text" name="title" value="{{ $page->title }}" required>
    <label>Content:</label>
    <textarea name="content" required>{{ $page->content }}</textarea>
    <button type="submit">Update Page</button>
</form>
