<!-- Navbar -->
<nav id="navbar" class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('./storage/logo/logo.png') }}" width="130" height="40" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">
                        {{ trans('common.home')}}
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ trans('common.category') }}
                    </a>
                    <div class="dropdown-menu" area-labelledby="navbarDropdown">
                        @foreach ($categories = App\Models\Category::all()->sortBy('category_name') as $category)
                        <a class="dropdown-item" href="{{ route('category', ['id' => $category->id]) }}">
                            {{ $category->category_name}}
                        </a>
                        @endforeach
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        {{ trans('common.promotion') }}
                    </a>
                </li>
            </ul>

            <!-- Right -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">

                    <form action="{{ route('home.search') }}" method="GET">
                        @csrf
                        <div class="bg-white shadow-sm rounded rounded-pill">
                            <div class="input-group">
                              <input type="search" name="keyword" placeholder="{{ trans('common.search') }}" class="form-control border-0 bg-white rounded rounded-pill">
                              <div class="input-group-append">
                                <button id="btn_serach" type="submit" class="btn btn-link text-primary"><i class="fa fa-search"></i></button>
                              </div>
                            </div>
                          </div>
                    </form>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="cart-qty" href="{{ route('cart') }}">
                        @if (Session::has('cart'))
                            <i class="fas fa-shopping-cart"></i> {{ Session::get('cart')->totalQty }}    
                        @else
                            <i class="fas fa-shopping-cart"></i>
                        @endif
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-globe-asia"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('change_language', ['language'=>'en']) }}">
                            {{ trans('common.en') }}
                        </a>
                        <a class="dropdown-item" href="{{ route('change_language', ['language'=>'vi']) }}">
                            {{ trans('common.vi') }}
                        </a>
                    </div>
                </li>


                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ trans('common.login') }}</a>
                    </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a id="navbarDropdown" class="dropdown-item" href="#">
                                    {{ trans('common.profile') }}
                                </a>
                                <a id="navbarDropdown" class="dropdown-item" href="{{ route('order') }}">
                                    {{ trans('common.my_order') }}
                                </a>
                                <a id="navbarDropdown" class="dropdown-item" href="#">
                                    {{ trans('common.change_pass') }}
                                </a>

                                <a class="dropdown-item" href="{{ route('home.logout') }}"
                                   onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                    {{ trans('common.logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('home.logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
            </ul>
        </div>
    </div>
</nav>