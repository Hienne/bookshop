@extends('layouts.master')

@section('title', trans('auth.register'))

@section('content')
<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body col-md-8 offset-md-2">
                    <h3 class="card-title text-center">{{ trans('auth.register') }}</h3>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        @include('front_end.common.auth_button')
                        <div class="form-group">
                            <label for="name">{{ trans('auth.name') }}</label>

                            <div>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email">{{ trans('auth.email') }}</label>

                            <div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password">{{ trans('auth.pass') }}</label>

                            <div>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm">{{ trans('auth.pass_conf') }}</label>

                            <div>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="phone">{{ trans('auth.phone') }}</label>

                            <div>
                                <input id="phone" type="number" class="form-control" name="phone" required autocomplete="phone">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address">{{ trans('auth.address') }}</label>

                            <div>
                                <input id="address" type="text" class="form-control" name="address" required autocomplete="address">
                            </div>
                        </div>

                        <div class="form-group">
                            <div>
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ trans('auth.register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center">
                    {{ trans('auth.have_account') }} <a href="{{ route('login') }}">{{ trans('auth.login') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
