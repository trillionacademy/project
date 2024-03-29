@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-sm-12">
            <div class="card">
                <div class="login-header login-title">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <!-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> -->

                            <div class="col-lg-8 col-sm-12 offset-md-2">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror aligncenter" placeholder="Email..." name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <!-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> -->

                            <div class="col-lg-8 col-sm-12 offset-md-2">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror aligncenter" placeholder="Password..." name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-lg-8 col-sm-12 offset-md-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-lg-8 col-sm-12 offset-md-2">
                                <div class="form-btn">
                                    <button type="submit" class="btn btn-primary btn-login">
                                        {{ __('Login') }}
                                        <i class="fa fa-hand-o-right big-icon"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-lg-8 col-sm-12 offset-md-2 aligncenter">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link bottom-a">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    <a class="btn btn-link bottom-click" href="{{ route('password.request') }}">
                                        {{ __('CLICK HERE') }}
                                    </a>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-lg-8 col-sm-12 offset-md-2 aligncenter">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link bottom-a">
                                        {{ __('Already have an account?') }}
                                    </a>
                                    <a class="btn btn-link bottom-click" href="{{ route('register') }}">
                                        {{ __('CLICK HERE') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
