@extends('layouts.app-front')
@section('content')
    <br>
    <br>
    <br>
    <br>
{{--    <div class="D2HomePage" style="background: #000;">--}}
{{--        <div class="container" style="left: 785px; top: 282px; color: #fff;">--}}
{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-md-4" style="padding-top: 244px;">--}}
{{--                    <div class="card" style="background: #222; border-radius: 0;">--}}
{{--                        <div class="row justify-content-center card-header">{{ __('Login') }}</div>--}}

{{--                        <div class="card-body col-md-12">--}}
{{--                            <form method="POST" action="{{ route('login') }}">--}}
{{--                                @csrf--}}

{{--                                <div class="form-group row">--}}
{{--                                    <div class="col-md-12">--}}
{{--                                        <input id="email" type="email" class="input-register @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email/Username">--}}

{{--                                        @error('email')--}}
{{--                                        <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                        @enderror--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="form-group row">--}}

{{--                                    <div class="col-md-12">--}}
{{--                                        <input id="password" type="password" class="input-register @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">--}}

{{--                                        @error('password')--}}
{{--                                        <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                        @enderror--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="form-group row">--}}
{{--                                    <div class="col-md-6 offset-md-4">--}}
{{--                                        <div class="form-check">--}}
{{--                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--                                            <label class="form-check-label" for="remember">--}}
{{--                                                {{ __('Remember Me') }}--}}
{{--                                            </label>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="form-group row mb-0">--}}
{{--                                    <div class="col-md-12    ">--}}
{{--                                        <button type="submit" class="button-gb-gradient-register">--}}
{{--                                            {{ __('Login') }}--}}
{{--                                        </button>--}}

{{--                                        @if (Route::has('password.request'))--}}
{{--                                            <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                                {{ __('Forgot Your Password?') }}--}}
{{--                                            </a>--}}
{{--                                        @endif--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="container" style="">
        <div class="text-center">
            <h3>Please Register or Login</h3>
            <p>We use the information you provide to give you the best experience possible.</p>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-md-6" style="border-right: 1px solid black">
                <div class="col-md-8 col-sm-12" style="margin-bottom: 20px;">
                    <div class="card">
                        <div class="card-header">{{ __('Login') }}</div>

                        <div class="card-body col-md-12">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input id="email" type="email" style="border-radius: 0;" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">

                                    <div class="col-md-12">
                                        <input id="password" type="password" style="border-radius: 0;" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                {{--                            // offset-md-4--}}
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <div class="">
                                            <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-12    ">
                                        <button type="submit" class="btn btn-warning col-md-12">
                                            {{ __('Login') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-6" style="">
                <div class="col-sm-8 offset-sm-4">
                    <div class="card">
                        <div class="card-header">{{ __('Register') }}</div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input id="name" type="text" style="border-radius: 0;" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="NickName">

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input id="email" type="email" style="border-radius: 0;" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email/Login">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input id="password" type="password" style="border-radius: 0;" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input id="password-confirm" style="border-radius: 0;" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm password">
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-success col-md-12">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
@endsection
