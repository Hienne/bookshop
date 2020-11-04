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

@endsection