{{-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="row">
                @foreach ($authors as $author)
                    <div class="col-3">
                        <img src="{{ asset($author->author_image) }}" 
                            style="border: #e4d4be 4px solid; width: 200px; height: 200px;" 
                            class="rounded-circle d-block w-100" alt="...">
                        <div class="text-center card-author">
                            <a href="#">{{ $author->author_name }}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


        <div class="carousel-item">
            <div class="row">
                @foreach ($authors as $author)
                    <div class="col-3">
                        <img src="{{ asset($author->author_image) }}" style="border: #e4d4be 4px solid" 
                        class="rounded-circle d-block w-100" alt="..." style="width: 200px; height: 200px;">
                        <div class="text-center card-author">
                            <a href="#">{{ $author->author_name }}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
      
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div> --}}

<div class="slider-author">
    @foreach ($authors as $author)
        <div class="item">
            <img src="{{ asset($author->author_image) }}" 
                            style="border: #e4d4be 4px solid; width: 200px; height: 200px;" 
                            class="rounded-circle d-block w-100" alt="...">
        </div>
    @endforeach
</div>