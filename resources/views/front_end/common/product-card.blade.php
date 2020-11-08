@if($books->isEmpty())
<div class="col-md-12 text-center">
    <p>{{ trans('common.empty') }}</p>
</div>
@else
@foreach($books as $book)
    <div class="col-lg-2 col-md-4 col-sm-6 col-6 results-row">
        <div class="card card-product mb-1">
            <a href="{{ route('detailBook', ['id' => $book->id])  }}" class="stretched-link">
                    <img class="card-img" class="w-75" src="{{ asset($book->book_image) }}" alt="{{  $book->book_name  }}">
            </a>
            <div class="card-body px-0 py-0">
                <div class="card-text text-dark card-product-name">{{ $book->book_name}}</div>
                
                <div class="card-text mb-1">
                    <span class="text-muted">{{  $book->author->author_name }}</span>
                </div>
                <h5 class="card-text price mb-1">{{  $book->price  }} VNĐ</h5>
                
                @if($book->comments->isEmpty())
                <div class="mb-1">
                    <div>
                        <p>{{ trans('book.not_review') }}</p>
                    </div>
                </div>
                @else
                <div class="mb-1">
                    <span class="stars-outer">
                        <div class="stars-inner" style="width: {{  $book->comments->avg('rate')/5 * 100 }}%"></div>
                    </span>
                    <p>({{  $book->comments->count('id') }} {{ trans('book.review') }})</p>
                </div>
                @endif
            </div>
        </div>
    </div>
@endforeach
@endif



