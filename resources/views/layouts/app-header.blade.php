
<header style="margin-bottom: 90px;">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
        <div class="container" style="padding: 1%;">
            <a class="navbar-brand" href="#">BorealisTeam</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('list.view')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Categories
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Raids</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">PvP</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
                </form>
                @guest()
                @else
                <div class="my-2 my-lg-0" style="margin-left: 30px;">
                    <a href="">
                        <img src="{{URL::asset('image/open-iconic/svg/bell.svg')}}" width="20px"> {{--bell.svg--}}
                    </a>
                </div>
                <div class="my-1 my-lg-0" style="margin-left: 30px;">
                    <a href="{{route('profile')}}">
                        <img src="{{URL::asset('image/open-iconic/svg/person.svg')}}" width="20px">
                    </a>
                </div>

                <div class="my-1 my-lg-0">
                    <li class="dropdown" style="list-style-type: none;">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{URL::asset('image/open-iconic/svg/cart.svg')}}" width="20px">
                        </a>
                        <?php
                            $products = \Illuminate\Support\Facades\Session::get('cart');
                            $productsPrice = 0;
                        ?>

                        <div class="dropdown-menu container" aria-labelledby="navbarDropdown" style="width: 350px; padding-left: 10px;">
                            @if(isset($products))
                                @foreach($products as $product)
                                <img src="{{$product['path']}}" alt="" width="100px">
                                <span>{{$product['name']}}</span>
                                <?php
                                    $productsPrice += $product['price'];
                                ?>
                                <br>
                                <br>
                                @endforeach
                            @else
                                Empty
                            @endif
                            <p style="border-bottom: 1px solid black;">Total items: @if(isset($products)){{count($products)}}@else 0 @endif</p>
                            <p style="border-bottom: 1px solid black;">Total Price: {{$productsPrice}}$</p>
                            <a href="{{route('cart.page')}}" class="btn btn-default">View Cart</a>
                            <a href="{{route('checkoutIndex')}}" class="btn btn-warning">Check Out</a>
{{--                            <button class="btn btn-warning">Check Out</button>--}}
                        </div>
                    </li>
                    <!-- <a href="../main page/cart.html">
                        <img src="../main page/open-iconic/svg/cart.svg" width="20px">
                    </a> -->
                </div>
                @endguest
                <div class="my-2 my-lg-0">
                    @guest()
                        <a id="login" class="" href="{{ route('login') }}">
                            <img src="{{URL::asset('image/open-iconic/svg/account-login.svg')}}" width="20px" alt="Login" title="Login">
                        </a>
                        <form id="login-form" action="{{ route('login') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @else
                        <a id="logout" class="" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                            <img src="{{URL::asset('image/open-iconic/svg/account-logout.svg')}}" width="20px" alt="">
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @endguest
                </div>
            </div>
        </div>
    </nav>
</header>
