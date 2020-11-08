@extends('layouts.master')

@section('title', $bookSelected->name)
@section('title', 'product')

@section('content')
<!-- Portfolio Item Row -->
<div class="row mt-4">
    <div class="col-lg-5 col-md-12">
        <img class="rounded mx-auto d-block w-75" src="{{ asset($bookSelected->book_image) }}" alt="">
    </div>
    <div class="col-lg-7 col-md-12">
        <h3 class="mb-4 title">{{ $bookSelected->book_name }}</h3>
        <table class="table table-striped bg-light">
            <tr>
                <td class="table-active w-25">{{ trans('common.author') }}</td>
                <td>{{ $bookSelected->author->author_name }}</td>
            </tr>
            <tr>
                <td class="table-active">{{ trans('common.category') }}</td>
                <td>{{ $bookSelected->category->category_name }}</td>
            </tr>
            <tr>
                <td class="table-active">{{ trans('common.publishing_house') }}</td>
                <td>{{ $bookSelected->publishing_house }}</td>
            </tr>
            <tr>
                <td class="table-active">{{ trans('common.publish_date') }}</td>
                <td>{{ $bookSelected->publish_date }}</td>
            </tr>
            <tr>
                <td class="table-active">{{ trans('common.number_page') }}</td>
                <td>{{ $bookSelected->number_of_pages }} {{ trans('book.page') }}</td>
            </tr>
            <tr>
                <td class="table-active">{{ trans('common.price') }}</td>
                <td>{{ $bookSelected->price }}</td>
            </tr>
        </table>

        {{ Form::open(['class' => 'form-horizontal']) }}
        <div class="form-group row">
            <label class="col col-md-12 col-form-label text-uppercase">
                <b>{{ trans('common.number') }}:</b>
            </label>
            <div class="col col-md-12">
                <div class="input-group">
                    <button class="btn btn-secondary" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                        class="minus decrease"><i class="fas fa-minus"></i></button>
                        <input class="w-25 quantity d-block form-control" min="0" name="quantity" value="1" type="number">
                    <button class="btn btn-secondary" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                    class="plus increase"><i class="fas fa-plus-circle"></i></button>
                </div>
            </div>
        </div>
        <div class="form-group row mb-0">
        <div class="col-md-12">
            {{ Form::hidden('bookId', $bookSelected->id, ['id' => 'bookId']) }}
            <button type="button" class="btn btn-primary btn-block text-uppercase" id="addToCart">
                {{ trans('book.add') }}
            </button>
        </div>
    </div>
    {{ Form::close() }}
</div>
</div>
<!-- Products Suggestion Row -->
<div class="new-arrivals mt-3">
    <h2 class="text-center py-4 m-0 title">{{ trans('book.same_author') }}</h2>
    <div class="row">
        {{-- @include('front_end.common.product-card') --}}
        @foreach ($bookByAuthor as $book)
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
                            <div class="stars-inner" style="width: {{  $book->comments->avg('rate') * 10 }}%"></div>
                        </span>
                        <p>({{  $book->comments->count('id') }} {{ trans('book.review') }})</p>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

{{-- book description --}}
<div>
    <h3 class="title text-center mt-4">{{ trans('book.book_des') }}</h3>
    {!! html_entity_decode($bookSelected->description) !!}
</div>

<!-- Reviews -->
<div class="row mt-5" id="review">
    <div class="col-md-12 my-4 text-center">
        <h3 class="title">{{ trans('book.review_title') }}</h3>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="float-left">
            <div class="stars-outer">
                <div class="stars-inner" style="width: {{ $commentOfBook->avg('rate')/5 * 100 }}%"></div>
            </div>
            <p class="text-lowercase">
                {{ $commentOfBook->avg('rate') }} 
                {{ trans('book.average_based_on') }}
                {{ $commentOfBook->count('id') }} 
                {{ trans('book.review') }}</p>
            
        </div>
    </div>
    <div class="col">
        <div class="float-right">
            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#reviewModal">
                {{ trans('book.leave_review') }}
            </button>
        </div>
    </div>
</div>

@if ($commentOfBook->count('id') > 0)
<div class="list-group my-3">
    @foreach($commentOfBook as $comment)
    <div class="list-group-item list-group-item-action">
        <div class="d-flex w-100 justify-content-between">
            <h5>{{ $comment->title }}</h5>
            <p class="text-muted">by <b>{{ $comment->user->name }}</b>
                {{ $comment->created_at->diffForHumans() }}</p>
        </div>
        <div class="stars-outer mb-1">
            <div class="stars-inner" style="width: {{$comment->rate / 5 * 100}}%"></div>
        </div>
        <p class="mb-0">{{ $comment->content }}</p>
    </div>
    @endforeach
</div>
@endif

<div class="modal fade" id="reviewModal" tabindex="-1" role="dialog" aria-labelledby="reviewModalTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                {{-- <h5 class="modal-title" id="reviewModalTitle">{{ trans('product.leave_review') }}</h5> --}}
                <h5 class="modal-title" id="reviewModalTitle">leave review</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{-- <form method="POST" action="{{ route('review.store') }}"> --}}
                <form method="POST" action="#">
                    @csrf
                    <div class="rating-stars text-center">
                        <ul id="stars">
                            <li class="star" title="Poor" data-value="1">
                                <i class="fa fa-star fa-fw"></i>
                            </li>
                            <li class="star" title="Fair" data-value="2">
                                <i class="fa fa-star fa-fw"></i>
                            </li>
                            <li class="star" title="Good" data-value="3">
                                <i class="fa fa-star fa-fw"></i>
                            </li>
                            <li class="star" title="Excellent" data-value="4">
                                <i class="fa fa-star fa-fw"></i>
                            </li>
                            <li class="star" title="WOW!!!" data-value="5">
                                <i class="fa fa-star fa-fw"></i>
                            </li>
                        </ul>
                        <small class="text-muted text-message"></small>
                    </div>
                    <input type="hidden" value="0" id="ratingInput" name="rating">
                    {{-- <input type="hidden" value="{{ $productSelected->id }}" name="product_id"> --}}
                    <input type="hidden" value="1" name="product_id">
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Enter title" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="body" rows="3" placeholder="Enter your review"
                            required></textarea>
                    </div>
                    <div class="float-right">
                        <button type="submit" class="btn btn-primary">{{ trans('user.update') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<!-- Add to cart using ajax -->
{{-- <script type="text/javascript">
    var cart = {{ Cart::count() }};
    var text = '<i class="fas fa-shopping-cart"></i>';
    jQuery(document).ready(function () {
        jQuery('#addToCart').click(function (e) {
            e.preventDefault();
            var qty = parseInt(jQuery('#qty').val());
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            jQuery.ajax({
                url: "{{ route('cart.add') }}",
                method: 'POST',
                data: {
                    color: jQuery('#color').val(),
                    size: jQuery('#size').val(),
                    qty: jQuery('#qty').val(),
                    productId: jQuery('#productId').val(),
                },
                success: function () {
                    $("#cart-qty").html(text + ' ' + (cart += qty));
                },
            });
        });
    });
</script> --}}
<!-- Review -->
<script type="text/javascript">
    $(document).ready(function () {
        /* 1. Visualizing things on Hover - See next part for action on click */
        $('#stars li').on('mouseover', function () {
            var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on

            // Now highlight all the stars that's not after the current hovered star
            $(this).parent().children('li.star').each(function (e) {
                if (e < onStar) {
                    $(this).addClass('hover');
                } else {
                    $(this).removeClass('hover');
                }
            });
        }).on('mouseout', function () {
            $(this).parent().children('li.star').each(function (e) {
                $(this).removeClass('hover');
            });
        });

        /* 2. Action to perform on click */
        $('#stars li').on('click', function () {
            var onStar = parseInt($(this).data('value'), 10); // The star currently selected
            var stars = $(this).parent().children('li.star');

            for (i = 0; i < stars.length; i++) {
                $(stars[i]).removeClass('selected');
            }

            for (i = 0; i < onStar; i++) {
                $(stars[i]).addClass('selected');
            }

            // JUST RESPONSE (Not needed)
            var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
            var msg = "";
            if (ratingValue > 1) {
                msg = "Thanks! You rated this " + ratingValue + " stars.";
            } else {
                msg = "We will improve ourselves. You rated this " + ratingValue + " stars.";
            }
            responseMessage(msg);
            document.getElementById('ratingInput').value = ratingValue;
        });

        function responseMessage(msg) {
            $('.text-message').html("<span>" + msg + "</span>");
        }
    });
</script>
@endsection