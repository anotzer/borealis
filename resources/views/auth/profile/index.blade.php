@extends('layouts.app-front')
@section('content')
{{--    <div class="D2HomePage" style="background: #000;">--}}
{{--        <div class="container" style="color: #fff; margin-left: 0;">--}}
{{--            <div class="row justify-content-lg-start">--}}
{{--                <div class="col-md-6" style="padding-top: 10px;">--}}
{{--                    <div class="card" style="background: #222; border-radius: 0;">--}}
{{--                        <div class="row justify-content-center card-header">{{ __('STANDARD PROFILE SETTINGS') }}</div>--}}

{{--                        <div class="card-body">--}}
{{--                            <form method="POST" action="{{ route('profile.update') }}">--}}
{{--                                @csrf--}}

{{--                                <div class="form-group row">--}}
{{--                                    <div class="col-md-12">--}}
{{--                                        <input class="input-label-profiler" value="Name">--}}
{{--                                        <input type="text" name="name" class="input-profiler" value="{{Auth::user()->name}}" required>--}}
{{--                                        @error('name')--}}
{{--                                        <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                        @enderror--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="form-group row">--}}
{{--                                    <div class="col-md-12">--}}
{{--                                        <input class="input-label-profiler" value="E-mail">--}}
{{--                                        <input name="email" id="email" type="email" value="{{Auth::user()->email}}" class="input-profiler" disabled readonly>--}}

{{--                                        @error('email')--}}
{{--                                        <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                        @enderror--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                @if (Route::has('password.request'))--}}
{{--                                    <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                        {{ __('Change your password') }}--}}
{{--                                    </a>--}}
{{--                                @endif--}}
{{--                                <div class="form-group row mb-0">--}}
{{--                                    <div class="col-md-12">--}}
{{--                                        <button type="submit" class="button-gb-gradient-register">--}}
{{--                                            {{ __('Update') }}--}}
{{--                                        </button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
<section class="container">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="profile-card">
                    <div class="row blockquote ">
                        <div class="col-md-8 text-center">
                            <img class="rounded-circle profiler" src="http://standaloneinstaller.com/upload/avatar.png" width="300px" style="border:1px solid red">
                            <div class="caption">
                                <small><a href="#joe" class="text-uppercase"></a></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="profile-card">
                    <div class="row blockquote "> {{--//profile-card-item--}}
                        <div class="col-md-12">
                            <br>
                            <label for="">About</label>
                            <div class="ratebox text-center" data-id="0" data-rating="5"></div>
                            <p class="profile-card-text text-uppercase">{{Auth::user()->name}}</p>
                            <p class="profile-card-text text-uppercase">{{Auth::user()->name}} {{Auth::user()->name}}</p>
                            <input type="submit" class="btn btn-info" value="Change information">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="profile-card">
                    <div class="row blockquote profile-card-item"> {{--//profile-card-item--}}
                        <div class="col-md-12">
                            <h3>Notification</h3>
                        </div>
                    </div>
                </div>
            </div>
{{--            <div class="col-md-12">--}}
{{--                <div class="profile-card">--}}
{{--                    <div class="row blockquote profile-card-item" style="box-shadow: 0.1px 0.1px 1.6px #343a40;">--}}
{{--                        <div class="col-md-12">--}}
{{--                            <h4 class="text-center">Order list</h4>--}}
{{--                            @foreach($orders as $order)--}}
{{--                            <div class="profile-card">--}}
{{--                                <div class="row blockquote profile-card-item">--}}
{{--                                    <div class="col-md-12 row">--}}
{{--                                        <img src="{{$order->image->path}}" alt="" width="200px">--}}
{{--                                        <div class="col-md-8">--}}
{{--                                            <label for=""><a href="../order/page/{{$order->id}}">{{$order->title}}</a></label><br>--}}
{{--                                            {{$order->description}}--}}
{{--                                        </div>--}}

{{--                                        <small class="profile-card-date">March 26, 2017</small>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            @endforeach--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>

    </div>
</section>

@endsection
