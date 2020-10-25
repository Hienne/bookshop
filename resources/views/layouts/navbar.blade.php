<!-- Navbar -->
<nav id="navbar" class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">
        <a class="navbar-brand" href="#">
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
                    <a class="nav-link" href="#">
                        {{ trans('common.home')}}
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ trans('common.category') }}
                    </a>
                    <div class="dropdown-menu" area-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">
                            văn học việt nam
                        </a>
                        <a class="dropdown-item" href="#">
                            văn học việt nam
                        </a>
                        <a class="dropdown-item" href="#">
                            văn học việt nam
                        </a>
                        <a class="dropdown-item" href="#">
                            văn học việt nam
                        </a>
                        <a class="dropdown-item" href="#">
                            văn học việt nam
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        {{ trans('common.best_selling') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        {{ trans('common.promotion') }}
                    </a>
                </li>

                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ trans('layouts.men') }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach ($categories = App\Models\Category::all()->sortBy('name') as $category)
                        <a class="dropdown-item" href="{{ route('category.men', $category->id) }}">
                            {{ $category->name }}
                        </a>
                        @endforeach
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ trans('layouts.women') }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach ($categories as $category)
                        <a class="dropdown-item" href="{{ route('category.women', $category->id) }}">
                            {{ $category->name }}
                        </a>
                        @endforeach
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.login') }}">
                        {{ trans('layouts.dashboard') }}
                    </a>
                </li> --}}
            </ul>

            <!-- Right -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        {{ Form::open(['route' => ['search'], 'method' => 'GET', 'class' => 'form-inline px-4', 'role' => 'search']) }}
                        {{ Form::search('keyword', '', ['class' => 'form-control form-control-sm shadow-none', 'placeholder' => trans('layouts.search'), 'autofocus']) }}
                        {{ Form::close() }}
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="cart-qty" href="#">
                        <i class="fas fa-shopping-cart"></i> 2
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-globe-asia"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">
                            {{ trans('common.en') }}
                        </a>
                        <a class="dropdown-item" href="#">
                            {{ trans('common.vi') }}
                        </a>
                    </div>
                </li>
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#authModalCenter">
                        {{ trans('common.login') }}
                    </a>
                </li>
                @else
                <li class="dropdown nav-item">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->email }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('user.edit', Auth::user()->id) }}">
                            {{ trans('common.profile') }}
                        </a>
                        <a class="dropdown-item" href="{{ route('order') }}">
                            {{ trans('common.my_order') }}
                        </a>
                        <a class="dropdown-item" href="{{ route('user.password.edit', Auth::user()->id) }}">
                            {{ trans('common.change_pass') }}
                        </a>
                        <a class="dropdown-item" href="{{ route('user.logout') }}"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            {{ trans('common.logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>


            {{-- <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        {{ Form::open(['route' => ['search'], 'method' => 'GET', 'class' => 'form-inline px-4', 'role' => 'search']) }}
                        {{ Form::search('keyword', '', ['class' => 'form-control form-control-sm shadow-none', 'placeholder' => trans('layouts.search'), 'autofocus']) }}
                        {{ Form::close() }}
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="cart-qty" href="{{ route('cart.index') }}">
                        <i class="fas fa-shopping-cart"></i> {{ Cart::count() }}
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-globe-asia"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('user.language', ['en']) }}">
                            {{ trans('layouts.english') }}
                        </a>
                        <a class="dropdown-item" href="{{ route('user.language', ['vi']) }}">
                            {{ trans('layouts.vietnamese') }}
                        </a>
                    </div>
                </li>
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#authModalCenter">
                        {{ trans('layouts.login') }}
                    </a>
                </li>
                @else
                <li class="dropdown nav-item">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->email }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('user.edit', Auth::user()->id) }}">
                            {{ trans('layouts.profile') }}
                        </a>
                        <a class="dropdown-item" href="{{ route('order') }}">
                            {{ trans('layouts.my_order') }}
                        </a>
                        <a class="dropdown-item" href="{{ route('user.password.edit', Auth::user()->id) }}">
                            {{ trans('layouts.change_password') }}
                        </a>
                        <a class="dropdown-item" href="{{ route('user.logout') }}"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            {{ trans('layouts.logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul> --}}
        </div>
    </div>
</nav>