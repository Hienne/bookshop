@extends('layouts.master')

{{-- @section('title', $productSelected->name) --}}
@section('title', 'product')

@section('content')
<!-- Portfolio Item Row -->
<div class="row mt-4">
    <div class="col-lg-5 col-md-12">
        <img class="rounded mx-auto d-block w-75" src="./storage/anh_bia/_ng_m_n.jpg" alt="">
    </div>
    <div class="col-lg-7 col-md-12">
        <h3 class="mb-4 title">Con đường mòn trên biển đông</h3>
        <table class="table table-striped bg-light">
            <tr>
                <td class="table-active w-25">{{ trans('common.author') }}</td>
                <td>Hiền đẹp trai</td>
            </tr>
            <tr>
                <td class="table-active">{{ trans('common.category') }}</td>
                <td>Văn học Việt Nam</td>
            </tr>
            <tr>
                <td class="table-active">{{ trans('common.publishing_house') }}</td>
                <td>Kim đồng</td>
            </tr>
            <tr>
                <td class="table-active">{{ trans('common.publish_date') }}</td>
                <td>26/03/1999</td>
            </tr>
            <tr>
                <td class="table-active">{{ trans('common.number_page') }}</td>
                <td>200 trang</td>
            </tr>
            <tr>
                <td class="table-active">{{ trans('common.price') }}</td>
                <td>50000 VNĐ</td>
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
    {{-- <div class="form-group row mb-0">
        <div class="col-md-12">
            {{ Form::hidden('productId', $productSelected->id, ['id' => 'productId']) }}
            <button type="button" class="btn btn-primary btn-block text-uppercase" id="addToCart">
                {{ trans('product.add') }}
            </button>
        </div>
    </div>
    {{ Form::close() }} --}}
</div>
</div>
<!-- Products Suggestion Row -->
<div class="row mt-5">
    <div class="col-md-12 my-4 text-center">
        <h3 class="title">{{ trans('common.same_author') }}</h3>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-lg-2 col-md-4 col-sm-6 col-6 mb-2 results-row">
        <div class="card card-product h-100">
            <a href="#">
                <img class="card-img-top w-75" src="./storage/anh_bia/_ng_m_n.jpg" alt="...">
            </a>
            <div class="card-body px-0">
                <div class="mb-1">
                    <span><a class="card-text text-dark"
                            href="#">Có một con đường mòn trên biển Đông</a></span>
                </div>
                <div class="card-text mb-1"><a class="text-muted"
                        href="#">Nguyễn Hiền</a></div>
                <h5 class="card-text price mb-1">50.000 VNĐ</h5>
                <div>
                    <span class="stars-outer">
                        <div class="stars-inner" style="width: 50%"></div>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6 col-6 mb-4 results-row">
        <div class="card card-product h-100">
            <a href="#">
                <img class="card-img-top w-75" src="./storage/anh_bia/_ng_m_n.jpg" alt="...">
            </a>
            <div class="card-body px-0">
                <div class="mb-1">
                    <span><a class="card-text text-dark"
                            href="#">Có một con đường mòn trên biển Đông</a></span>
                </div>
                <div class="card-text mb-1"><a class="text-muted"
                        href="#">Nguyễn Hiền</a></div>
                <h5 class="card-text price mb-1">50.000 VNĐ</h5>
                <div>
                    <span class="stars-outer">
                        <div class="stars-inner" style="width: 50%"></div>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6 col-6 mb-4 results-row">
        <div class="card card-product h-100">
            <a href="#">
                <img class="card-img-top w-75" src="./storage/anh_bia/_ng_m_n.jpg" alt="...">
            </a>
            <div class="card-body px-0">
                <div class="mb-1">
                    <span><a class="card-text text-dark"
                            href="#">Có một con đường mòn trên biển Đông</a></span>
                </div>
                <div class="card-text mb-1"><a class="text-muted"
                        href="#">Nguyễn Hiền</a></div>
                <h5 class="card-text price mb-1">50.000 VNĐ</h5>
                <div>
                    <span class="stars-outer">
                        <div class="stars-inner" style="width: 50%"></div>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-6 col-6 mb-4 results-row">
        <div class="card card-product h-100">
            <a href="#">
                <img class="card-img-top w-75" src="./storage/anh_bia/_ng_m_n.jpg" alt="...">
            </a>
            <div class="card-body px-0">
                <div class="mb-1">
                    <span><a class="card-text text-dark"
                            href="#">Có một con đường mòn trên biển Đông</a></span>
                </div>
                <div class="card-text mb-1"><a class="text-muted"
                        href="#">Nguyễn Hiền</a></div>
                <h5 class="card-text price mb-1">50.000 VNĐ</h5>
                <div>
                    <span class="stars-outer">
                        <div class="stars-inner" style="width: 50%"></div>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-2 col-md-4 col-sm-6 col-6 mb-4 results-row">
        <div class="card card-product h-100">
            <a href="#">
                <img class="card-img-top w-75" src="./storage/anh_bia/_ng_m_n.jpg" alt="...">
            </a>
            <div class="card-body px-0">
                <div class="mb-1">
                    <span><a class="card-text text-dark"
                            href="#">Có một con đường mòn trên biển Đông</a></span>
                </div>
                <div class="card-text mb-1"><a class="text-muted"
                        href="#">Nguyễn Hiền</a></div>
                <h5 class="card-text price mb-1">50.000 VNĐ</h5>
                <div>
                    <span class="stars-outer">
                        <div class="stars-inner" style="width: 50%"></div>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-2 col-md-4 col-sm-6 col-6 mb-4 results-row">
        <div class="card card-product h-100">
            <a href="#">
                <img class="card-img-top w-75" src="./storage/anh_bia/_ng_m_n.jpg" alt="...">
            </a>
            <div class="card-body px-0">
                <div class="mb-1">
                    <span><a class="card-text text-dark"
                            href="#">Có một con đường mòn trên biển Đông</a></span>
                </div>
                <div class="card-text mb-1"><a class="text-muted"
                        href="#">Nguyễn Hiền</a></div>
                <h5 class="card-text price mb-1">50.000 VNĐ</h5>
                <div>
                    <span class="stars-outer">
                        <div class="stars-inner" style="width: 50%"></div>
                    </span>
                </div>
            </div>
        </div>
    </div>
    {{-- @foreach ($productsSuggestion as $product)
    <div class="col-lg-2 col-md-4 col-sm-4 col-6">
        <div class="card card-product">
            <a href="{{ route('product.show', $product->id) }}" class="swap-on-hover">
                @if (count($product->image) > 1)
                <img class="card-img-top img-front" src="{{ asset($product->image[0]) }}" alt="{{ $product->name }}">
                <img class="card-img-top img-back" src="{{ asset($product->image[1]) }}" alt="{{ $product->name }}">
                @else
                <img class="card-img-top img-front" src="{{ asset($product->image[0]) }}" alt="{{ $product->name }}">
                <img class="card-img-top img-back" src="{{ asset($product->image[0]) }}" alt="{{ $product->name }}">
                @endif
            </a>
            <div class="card-body px-0">
                <h5 class="card-text"> <a href="{{ route('product.show', $product->id) }}">{{ $product->name }}</a>
                </h5>
                <h5 class="card-text text-muted">${{ $product->price }}</h5>
            </div>
        </div>
    </div>
    @endforeach --}}
</div>
<div class="row">
    <p class="col-md-12 text-center text-uppercase">
        <a
            href="#">{{ trans('common.more') }}
        </a>
    </p>
</div>

{{-- book description --}}
<div>
    <h3 class="title text-center mt-4">{{ trans('common.book_des') }}</h3>
    <p style="text-align: justify;"><span style="color: #ff6600; font-size: medium;"><strong>You Can Win - Bí Quyết Của Người Chiến Thắng</strong></span><br /><strong></strong></p>  <p style="text-align: justify;">Với cách đặt vấn đề dễ hiểu, thiết thực và sâu sắc, <strong>Bí quyết của người chiến thắng</strong> sẽ giúp bạn tránh rơi vào cảm giác mất phương hướng, biết xác định mục tiêu và những giá trị cần ưu tiên trong cuộc sống. <span style="font-size: 12px;">Có  thể xem cuốn sách này như một quyển sổ tay liệt kê những công cụ cần  thiết để kiến tao thành công và giúp bạn tạo lập một cuộc sống tốt đẹp.  Cũng có thể xem nó như một cuốn cảm nang dạy nấu ăn, bao gồm những chỉ  dần về nguyên liệu, công thức và cách pha trộn theo tỉ lệ thích hợp để  có được thành công.</span></p>  <p style="text-align: justify;">Nhưng  trên hết, đây là cuốn sách từng bước dẫn dặt bạn đi từ mơ ước, khát vọng  thành công đến khám phá năng lực của bản thân và biến ước mơ thành hiện  thực.   <span style="font-size: 12px;">Bí  quyết sẽ giúp bạn xây dựng mục tiêu mới, hình thành ý niệm mới về mục  đích sống, phát triển tư tưởng mới về bản thân và tương lai.</span></p>  <p style="text-align: justify;">Một  trong những mục đích của cuốn sách là giúp bạn đề ra kế hoạch hành động  cho tương lai. Nếu chưa bao giờ làm vậy, bạn hãy xác định xem:</p>  <p style="text-align: justify;">- Bạn muốn đạt được điều gì?</p>  <p style="text-align: justify;">- Bạn muốn đạt được mục tiêu bằng cách nào?</p>  <p style="text-align: justify;">- Thời điểm bạn muốn đạt được mục tiêu là khi nào?</p>  <p style="text-align: justify;">Những  nguyên tắc trình bày trong cuốn sách đều mang tính phổ quát, áp dụng cho  mọi tình huống, tổ chức hoặc quốc gia. Hy vọng cuốn sách sẽ mang lại  cho bạn nhiều điều mới mẻ vagragrave; những khám phá thú vị.</p>
</div>

<!-- Reviews -->
<div class="row mt-5" id="review">
    <div class="col-md-12 my-4 text-center">
        <h3 class="title">{{ trans('common.review_title') }}</h3>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="float-left">
            <div class="stars-outer">
                <div class="stars-inner" style="width: 50%"></div>
            </div>
            <p class="text-lowercase">
                {{-- {{ $averageRating }}  --}}
                {{ trans('common.average_based_on') }}
                {{-- {{ count($reviews) }}  --}}
                {{ trans('common.review') }}</p>
            
        </div>
    </div>
    <div class="col">
        <div class="float-right">
            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#reviewModal">
                {{ trans('common.leave_review') }}
            </button>
        </div>
    </div>
</div>

{{-- @if (count($reviews)) --}}
<div class="list-group my-3">
    {{-- @foreach($reviews as $review) --}}
    <div class="list-group-item list-group-item-action">
        <div class="d-flex w-100 justify-content-between">
            {{-- <h5>{{ $review->title }}</h5> --}}
            <h5>title</h5>
            {{-- <p class="text-muted">by <b>{{ $review->user->profile->full_name }}</b>
                {{ $review->updated_at->diffForHumans() }}</p> --}}
                <p class="text-muted">by <b>Hien</b>
                    ngay comment</p>
        </div>
        <div class="stars-outer mb-1">
            <div class="stars-inner" style="width: 50%"></div>
        </div>
        {{-- <p class="mb-0">{{ $review->body }}</p> --}}
        <p class="mb-0">hay vl</p>
    </div>
    {{-- @endforeach --}}
</div>

{{-- <div class="d-flex justify-content-center">{{ $reviews->links() }}</div> --}}
{{-- @endif --}}

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