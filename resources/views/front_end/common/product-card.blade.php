@if($books->isEmpty())
<div class="col-md-12 text-center">
    <p>{{ trans('common.empty') }}</p>
</div>
@else
@foreach($books as $book)
    <div class="col-lg-2 col-md-4 col-sm-6 col-6 results-row">
        <div class="card card-product h-100">
            <a href="#">
            <img class="card-img-top" src="{{ asset('$book->image') }}" alt="{{  $book->name  }}">
                <div class="card-body px-0">
                    <div>
                        {{  $book->name  }}
                    </div>
                    <div class="card-text mb-1">
                        {{  $book->author}}
                    </div>
                <h5 class="card-text price mb-1">{{  $book->price  }} VNĐ</h5>
                <div class="mb-1">
                    <span class="stars-outer">
                        <div class="stars-inner" style="width: 50%"></div>
                    </span>
                </div>
            </a>
        </div>
    </div>
</div>
@endforeach
@endif