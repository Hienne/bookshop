@extends('layouts.master')

@section('title', trans('common.home'))

@section('cover')
<div class="bd-example">
    <div id="slideBar" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#slideBar" data-slide-to="0" class="active"></li>
            <li data-target="#slideBar" data-slide-to="1"></li>
            <li data-target="#slideBar" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./storage/slides/slide_1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <p data-aos="fade-right" class="text-white">Chúng ta là ai, mỗi người trong chúng ta là ai nếu không phải tổ hợp của kinh nghiệm, thông tin, những cuốn sách chúng ta đã đọc, những điều chúng ta đã tưởng tượng ra?</p>
                    <h1>Italo Calvino</h1>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./storage/slides/slide_2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block text-left text-dark">
                    <p class="text-white">Chúng ta sẽ trở thành gì phụ thuộc vào điều chúng ta đọc sau khi tất cả các thầy cô giáo đã xong việc với chúng ta. Trường học vĩ đại nhất chính là sách vở.</p>
                    <h1 class="text-white">Thomas Carlyle</h1>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./storage/slides/slide_3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <p class="text-white">Chính từ sách mà những người khôn ngoan tìm được sự an ủi khỏi những rắc rối của cuộc đời.</p>
                    <h1>Victor Hugo</h1>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#slideBar" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">{{ trans('common.previous') }}</span>
        </a>
        <a class="carousel-control-next" href="#slideBar" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">{{ trans('common.next') }}</span>
        </a>
    </div>
</div>
@endsection

@section('content')
<div class="new-arrivals mt-3">
    <h2 class="text-center py-4 m-0 title">{{ trans('common.books') }}</h2>
    <div class="row">
        @include('front_end.common.product-card')
    </div>
    <div class="d-flex justify-content-center mt-3">
        <a href="{{ route('books') }}">{{ trans('common.more') }}</a>
    </div>
</div>

<div class="new-arrivals mt-3">
    <h2 class="text-center py-4 m-0 title">{{ trans('common.best_selling_book') }}</h2>
    <div class="row">
        @foreach($bestSellingBooks as $bestSellingBooks)
    <div class="col-lg-2 col-md-4 col-sm-6 col-6 results-row">
        <div class="card card-product mb-1">
            <a href="#" class="stretched-link">
                    <img class="card-img" class="w-75" src="{{ asset($bestSellingBooks->book_image) }}" alt="{{  $bestSellingBooks->book_name  }}">
            </a>
            <div class="card-body px-0 py-0">
                <div class="card-text text-dark card-product-name">{{ $bestSellingBooks->book_name}}</div>
                
                <div class="card-text mb-1">
                    <span class="text-muted">{{  $bestSellingBooks->author_name }}</span>
                </div>
                <h5 class="card-text price mb-1">{{  $bestSellingBooks->price  }} VNĐ</h5>
                
                @if($bestSellingBooks->rate == null)
                <div class="mb-1">
                    <div>
                        <p>Không có nhận xét</p>
                    </div>
                </div>
                @else
                <div class="mb-1">
                    <span class="stars-outer">
                        <div class="stars-inner" style="width: {{  $bestSellingBooks->rate * 10 }}%"></div>
                    </span>
                    <p>({{  $bestSellingBooks->numOfCom }} nhận xét)</p>
                </div>
                @endif
            </div>
        </div>
    </div>
@endforeach
    </div>
</div>

<div class="mt-5">
    <h2 class="text-center py-4 m-0 title">{{ trans('common.authors') }}</h2>
    
    {{-- @include('front_end.author.author_card') --}}
<div class="container">
    <div class="your-class row">
        <div class="col-md-12">
            <img src="{{ asset('./storage/author/A_J Hoge.jpg') }}" 
                            style="border: #e4d4be 4px solid; width: 200px; height: 200px;" 
                            class="rounded-circle d-block w-100" alt="...">
        </div>
        <div class="col-md-12">
            <img src="{{ asset('./storage/author/adam-khoo.jpg') }}" 
                            style="border: #e4d4be 4px solid; width: 200px; height: 200px;" 
                            class="rounded-circle d-block w-100" alt="...">
        </div>
        <div class="col-md-12">
            <img src="{{ asset('./storage/author/agatha_christie.jpg') }}" 
                            style="border: #e4d4be 4px solid; width: 200px; height: 200px;" 
                            class="rounded-circle d-block w-100" alt="...">
        </div>
        <div class="col-md-12">
            <img src="{{ asset('./storage/author/A_J Hoge.jpg') }}" 
                            style="border: #e4d4be 4px solid; width: 200px; height: 200px;" 
                            class="rounded-circle d-block w-100" alt="...">
        </div>
        <div class="col-md-12">
            <img src="{{ asset('./storage/author/A_J Hoge.jpg') }}" 
                            style="border: #e4d4be 4px solid; width: 200px; height: 200px;" 
                            class="rounded-circle d-block w-100" alt="...">
        </div>
        <div class="col-md-12">
            <img src="{{ asset('./storage/author/A_J Hoge.jpg') }}" 
                            style="border: #e4d4be 4px solid; width: 200px; height: 200px;" 
                            class="rounded-circle d-block w-100" alt="...">
        </div>
        <div class="col-md-12">
            <img src="{{ asset('./storage/author/A_J Hoge.jpg') }}" 
                            style="border: #e4d4be 4px solid; width: 200px; height: 200px;" 
                            class="rounded-circle d-block w-100" alt="...">
        </div>
        <div class="col-md-12">
            <img src="{{ asset('./storage/author/A_J Hoge.jpg') }}" 
                            style="border: #e4d4be 4px solid; width: 200px; height: 200px;" 
                            class="rounded-circle d-block w-100" alt="...">
        </div>
    </div>
</div>
</div>

@endsection

@section('script')
    <script type="text/javascript">
        $('.your-class').slick({
            dots: true,
            arrows: true,
            infinite: true,
            speed: 300,
            slidesToShow: 5,
            slidesToScroll: 1,
            responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
        })
  </script>
@endsection