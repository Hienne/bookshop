<div class="row">
    @foreach ($authors as $author)
        <div class="col">
            <img src="{{ asset($author->author_image) }}" 
                    style="border: #e4d4be 4px solid; width: 200px; height: 200px;" 
                    class="rounded-circle d-block w-100" alt="...">
            <div class="text-center card-author pt-3">
                <a class="text-muted" href="#">{{ $author->author_name }}</a>
            </div>
        </div>
    @endforeach
</div>