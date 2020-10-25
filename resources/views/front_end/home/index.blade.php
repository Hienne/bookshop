@extends('layouts.master')

@section('title', trans('home.branch'))

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
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#slideBar" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
@endsection

@section('content')
<div class="new-arrivals mt-5">
    <h2 class="text-center py-4 m-0 title">Sách mới</h2>
    <div class="row">
        {{-- @include('frontend.common.product-card') --}}
        <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 results-row">
            <div class="card card-product h-100">
                <a href="#">
                    <img class="card-img-top" src="./storage/anh_bia/_ng_m_n.jpg" alt="...">
                </a>
                <div class="card-body px-0">
                    <div class="mb-1">
                        <span><a class="card-text text-dark" style="font-size: 16px"
                                href="#">Có một con đường mòn trên biển Đông</a></span>
                    </div>
                    <div class="card-text mb-1"><a class="text-muted"
                            href="#">Nguyễn Hiền</a></div>
                    <h5 class="card-text price mb-1">50.000 VNĐ</h5>
                    <div class="mb-1">
                        <span class="stars-outer">
                            <div class="stars-inner" style="width: 50%"></div>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 results-row">
            <div class="card card-product h-100">
                <a href="#">
                    <img class="card-img-top" src="./storage/anh_bia/_ng_m_n.jpg" alt="...">
                </a>
                <div class="card-body px-0">
                    <div class="mb-1">
                        <span><a class="card-text text-dark" style="font-size: 16px"
                                href="#">Có một con đường mòn trên biển Đông</a></span>
                    </div>
                    <div class="card-text mb-1"><a class="text-muted"
                            href="#">Nguyễn Hiền</a></div>
                    <h5 class="card-text price mb-1">50.000 VNĐ</h5>
                    <div class="mb-1">
                        <span class="stars-outer">
                            <div class="stars-inner" style="width: 50%"></div>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 results-row">
            <div class="card card-product h-100">
                <a href="#">
                    <img class="card-img-top" src="./storage/anh_bia/_ng_m_n.jpg" alt="...">
                </a>
                <div class="card-body px-0">
                    <div class="mb-1">
                        <span><a class="card-text text-dark" style="font-size: 16px"
                                href="#">Có một con đường mòn trên biển Đông</a></span>
                    </div>
                    <div class="card-text mb-1"><a class="text-muted"
                            href="#">Nguyễn Hiền</a></div>
                    <h5 class="card-text price mb-1">50.000 VNĐ</h5>
                    <div class="mb-1">
                        <span class="stars-outer">
                            <div class="stars-inner" style="width: 50%"></div>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 results-row">
            <div class="card card-product h-100">
                <a href="#">
                    <img class="card-img-top" src="./storage/anh_bia/_ng_m_n.jpg" alt="...">
                </a>
                <div class="card-body px-0">
                    <div class="mb-1">
                        <span><a class="card-text text-dark" 
                                href="#">Có một con đường mòn trên biển Đông</a></span>
                    </div>
                    <div class="card-text mb-1"><a class="text-muted"
                            href="#">Nguyễn Hiền</a></div>
                    <h5 class="card-text price mb-1">50.000 VNĐ</h5>
                    <div class="mb-1">
                        <span class="stars-outer">
                            <div class="stars-inner" style="width: 50%"></div>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        
    </div>


    {{-- <div class="d-flex justify-content-center" data-aos="zoom-in">{{ $products->links() }}</div> --}}
</div>

<div class="new-arrivals mt-5">
    <h2 class="text-center py-4 m-0 title">Sách Bán Chạy</h2>
    <div class="row">
        {{-- @include('frontend.common.product-card') --}}
        <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 results-row">
            <div class="card card-product h-100">
                <a href="#">
                    <img class="card-img-top" src="./storage/anh_bia/_ng_m_n.jpg" alt="...">
                </a>
                <div class="card-body px-0">
                    <div class="mb-1">
                        <span><a class="card-text text-dark" style="font-size: 16px"
                                href="#">Có một con đường mòn trên biển Đông</a></span>
                    </div>
                    <div class="card-text mb-1"><a class="text-muted"
                            href="#">Nguyễn Hiền</a></div>
                    <h5 class="card-text price mb-1">50.000 VNĐ</h5>
                    <div class="mb-1">
                        <span class="stars-outer">
                            <div class="stars-inner" style="width: 50%"></div>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 results-row">
            <div class="card card-product h-100">
                <a href="#">
                    <img class="card-img-top" src="./storage/anh_bia/_ng_m_n.jpg" alt="...">
                </a>
                <div class="card-body px-0">
                    <div class="mb-1">
                        <span><a class="card-text text-dark" style="font-size: 16px"
                                href="#">Có một con đường mòn trên biển Đông</a></span>
                    </div>
                    <div class="card-text mb-1"><a class="text-muted"
                            href="#">Nguyễn Hiền</a></div>
                    <h5 class="card-text price mb-1">50.000 VNĐ</h5>
                    <div class="mb-1">
                        <span class="stars-outer">
                            <div class="stars-inner" style="width: 50%"></div>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 results-row">
            <div class="card card-product h-100">
                <a href="#">
                    <img class="card-img-top" src="./storage/anh_bia/_ng_m_n.jpg" alt="...">
                </a>
                <div class="card-body px-0">
                    <div class="mb-1">
                        <span><a class="card-text text-dark" style="font-size: 16px"
                                href="#">Có một con đường mòn trên biển Đông</a></span>
                    </div>
                    <div class="card-text mb-1"><a class="text-muted"
                            href="#">Nguyễn Hiền</a></div>
                    <h5 class="card-text price mb-1">50.000 VNĐ</h5>
                    <div class="mb-1">
                        <span class="stars-outer">
                            <div class="stars-inner" style="width: 50%"></div>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-4 results-row">
            <div class="card card-product h-100">
                <a href="#">
                    <img class="card-img-top" src="./storage/anh_bia/_ng_m_n.jpg" alt="...">
                </a>
                <div class="card-body px-0">
                    <div class="mb-1">
                        <span><a class="card-text text-dark" 
                                href="#">Có một con đường mòn trên biển Đông</a></span>
                    </div>
                    <div class="card-text mb-1"><a class="text-muted"
                            href="#">Nguyễn Hiền</a></div>
                    <h5 class="card-text price mb-1">50.000 VNĐ</h5>
                    <div class="mb-1">
                        <span class="stars-outer">
                            <div class="stars-inner" style="width: 50%"></div>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        
    </div>


    {{-- <div class="d-flex justify-content-center" data-aos="zoom-in">{{ $products->links() }}</div> --}}
</div>
@endsection