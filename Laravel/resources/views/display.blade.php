<div>
    <h1>List of Images</h1>

    @if($imageData->count())

        @foreach($imageData as $item)

            <img src="{{ URL::signedRoute('storage.local', ['path' => 'public/' . ltrim($item->path, '/')], null, false) }}"
                 width="200"
                 height="200"
                 alt="Image">

        @endforeach

    @else

        <h3>No Images Found</h3>

    @endif
</div>
