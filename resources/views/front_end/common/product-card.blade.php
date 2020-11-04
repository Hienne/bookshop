@if($books->isEmpty())
<div class="col-md-12 text-center">
    <p>{{ trans('common.empty') }}</p>
</div>
@else
@foreach($books as $book)
    <div class="col-lg-2 col-md-4 col-sm-6 col-6 results-row">
        <div class="card card-product mb-1">
            <a href="#" class="stretched-link">
                    <img class="card-img" class="w-75" src="{{ asset($book->book_image) }}" alt="{{  $book->book_name  }}">
            </a>
            <div class="card-body px-0 py-0">
                <div class="card-text text-dark card-product-name">{{ $book->book_name}}</div>
                
                <div class="card-text mb-1">
                    <span class="text-muted">{{  $book->author->author_name }}</span>
                </div>
                <h5 class="card-text price mb-1">{{  $book->price  }} VNĐ</h5>
                <div class="mb-1">
                    <span class="stars-outer">
                        <div class="stars-inner" style="width: 50%"></div>
                    </span>
                </div>
            </div>
        </div>
    </div>
@endforeach
@endif



