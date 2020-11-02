@extends('layouts.master')

@section('title', trans('common.login'))
    
@section('content')
<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body col-md-8 offset-md-2">
                    <h3 class="card-title text-center py-2">{{ trans('auth.login') }}</h3>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        @include('front_end.common.auth_button')
                        <div class="form-group">
                            <label for="email">{{ trans('auth.email') }}</label>

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group">
                            <label for="password">{{ trans('auth.pass') }}</label>

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ trans('auth.remember_me') }}
                                    </label>

                                    <a class="float-right" href="{{ route('password.request') }}">
                                        {{ trans('auth.forgot_pass') }}
                                    </a>
                                </div>

                        </div>

                        <div class="form-group">
                            <div>
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ trans('common.login') }}
                                </button>

                                
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center">
                    {{ trans('auth.dont_have_account') }} <a href="{{ route('register') }}">{{ trans('auth.register') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
