@foreach($products as $product)
    <div class="col-lg-2 col-md-4 col-sm-6 col-6 results-row">
        <div class="card card-product h-100">
            <a href="#">
                <img class="card-img-top" src="./storage/anh_bia/_ng_m_n.jpg" alt="...">
            </a>
            <div class="card-body px-0">
                <div>
                    <span><a class="card-text text-dark" style="font-size: 15px"
                        href="#">Có một con đường mòn trên biển Đông</a></span>
                </div>
                <div class="card-text mb-1">
                    <a class="text-muted" href="#">Nguyễn Hiền</a>
                </div>
            <h5 class="card-text price mb-1">50.000 VNĐ</h5>
            <div class="mb-1">
                <span class="stars-outer">
                    <div class="stars-inner" style="width: 50%"></div>
                </span>
            </div>
        </div>
    </div>
</div>
@endforeach