<!-- List all pages -->
@foreach ($pages as $page)
    <p>{{ $page->title }} - <a href="{{ route('pages.edit', $page) }}">Edit</a> | <a href="{{ route('pages.destroy', $page) }}">Delete</a></p>
@endforeach
