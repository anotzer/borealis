@extends('layouts.app-front')
<link rel="stylesheet" href="{{ URL::asset('css/OrderStyle.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@section('content')
    <div class="D2HomePage" style="">
        <div class="container-fluid" style="margin-left: 0;">
            <div class="col-md-12">
                <div>
                    <hr color="rgba(255,255,255,.4)">
                </div>
            </div>
            <section class="pt-5 container-fluid">
                <div class="row">
                    <div class="col-md-6 mt-5">
                        <div>
{{--                            <div style="background: url('{{$order->image->path}}'); padding: 0 5% 0 15%;background-size: cover; /*width: 400px;*/ border: 1px solid #2f2f2f; border-radius: 5px"></div>--}}
                            <img class="float-md-right order-img-md" src="{{$order->image->path}}" alt="" style="border: 1px solid #8086d0; border-radius: 5px; width: 500px;">
                        </div>
{{--                        <div style="background: url('{{$order->image->path}}');padding: 0 5% 0 15%;background-size: cover; width: 400px; height: 300px; border: 1px solid #2f2f2f; border-radius: 5px"></div>--}}
{{--                        <img src="{{$order->image->path}}" width="700px" height="400px" alt="" style="border: 1px solid #2f2f2f; border-radius: 5px" oncontextmenu="return false;">--}}
                    </div>
{{--                    <div class="col-md-4">--}}
{{--                        <div class="row justify-content-center">--}}
{{--                            <span>--}}
{{--                                <h3>Description {{$order->id}}</h3>--}}
{{--                            </span>--}}
{{--                        </div>--}}
{{--                        <p class="px-2">--}}
{{--                            <?php echo htmlspecialchars_decode(stripslashes($order->description));?>--}}
{{--                        </p>--}}
{{--                    </div>--}}
                    <div class="col-md-4 mt-2 pt-4 ml-md-5 ml-sm-1">
                        <div style="border-bottom: 1px solid #2f2f2f; padding: 10px 5px 25px 5px">
                            <h5 class="text-uppercase">we support <span class="fa fa-windows"></span> pc</h5>
                        </div>
                        <div class="">
                            <p class="text-uppercase pt-4">Advanced options</p>
                            <div class="row">
                                @foreach($order->options as $option)
                                <div class="checkbox_price col-sm-6">
                                    <input class="check_elem" id="check{{$option->id}}" type="checkbox" name="{{$option->id}}" value="{{$option->price}}" price="{{$option->price}}">
                                    <label for="check{{$option->id}}">{{$option->title}}</label>+<span>{{$option->price}}</span> $
                                    <br>
                                    <br>
                                </div>
                                @endforeach
                            </div>
                            <div class="pt-5">
                                <input id="check_policy" type="checkbox" name="check" value="check2">
                                <label for="check_policy">Политика</label><br>
                                <a href="">Ссылка на прочитать политику</a>
                            </div>
                        </div>
                        <br>
                        <form method="get" action="/cart/addToCart">
                            @csrf
{{--                            <div class="row justify-content-start col-md-6" style="background-color: #0D3349">--}}
                            @auth
                                <a href="#" class="text-uppercase font-weight-bold btn btn-warning border-0 pt-md-2 pb-2 col-md-12 ml-sm-0"
                                   style="/*background-image: linear-gradient(90deg,#3d82f4,#956ff7),linear-gradient(90deg,#3d82f4,#956ff7);font-weight: bold;*/"
                                   onclick="addToCart({{$order->id}},{{$order}}); return false;">add to cart
                                    <span style="margin: 0 10px 0 10px"> > </span>
                                    <span id="price_btn">{{$order->price}}</span> $</a>
{{--                                <button class="btn btn-success border-0 pt-2 pb-2" style="background-image: linear-gradient(90deg,#3d82f4,#956ff7),linear-gradient(90deg,#3d82f4,#956ff7);font-weight: bold;padding: 5px 10px 5px 10px" onclick="addToCart({{$order->id}})">--}}
{{--                                    Buy now--}}
{{--                                    <span style="margin: 0 20px 0 20px"> > </span>--}}
{{--                                    <span id="price_btn">{{$order->price}}</span> $</button>--}}
{{--                            </div>--}}
                            @else
                                <a href="{{route('login')}}" class="text-uppercase font-weight-bold btn btn-warning border-0 pt-md-2 pb-2 col-md-12 ml-sm-0">add to cart
                                    <span style="margin: 0 10px 0 10px"> > </span>
                                    <span id="price_btn">{{$order->price}}</span> $
                                </a>
                            @endauth
                        </form>

                        <div class="col-md-12" id="above_success" style="display: none;">
                            <div id="success" class="alert alert-success" >
                            </div>
                        </div>

                        <div id="error">
                        </div>
                    </div>
                </div>
            </section>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            @if($order->description != "")
            <div class="title" style="font-size: 20px;">
{{--                <h4>--}}
                    <span>
                        SERVICE INFO
                    </span>
{{--                </h4>--}}
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 mt-5">
                    <p class="px-2">
                        <div class="order-card">
                            <div class="row blockquote order-card-item">
                                <div class="">
                                <p class="review-text"><?php echo htmlspecialchars_decode(stripslashes($order->description));?></p>
                                </div>
                            </div>
                        </div>
                    </p>
                </div>
            </div>
            @endif
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="col-md-12"></div>
        </div>
    </div>
    <script !src="">

    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script !src="">
        const order_price = parseFloat($('#price_btn').text()); // order_sum = 425

        let priceWithDraw = 0;
        function change_price_for_users (summ) {
            let fullSizePrice = summ;
            let options_price = 0;
            $('.checkbox_price input:checkbox:checked').each(function(index, element){
                var add = parseInt($(element).val(), 10);
                if(!isNaN(add)) {
                    fullSizePrice += add;
                    options_price += add;
                }
            });
            $("#price_btn").text(fullSizePrice);
            return options_price;
        }
        $('.checkbox_price').on("change",function (e) {
            e.preventDefault();

             priceWithDraw = change_price_for_users(order_price);
        });

        function addToCart(itemId, order) {
            priceWithDraw = 0;
            priceWithDraw = change_price_for_users(order_price);
            $.ajax({
                type: "post",
                url: '/cart/addToCart',
                data: {item: itemId, product: order, advanced_price: priceWithDraw },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                },
                dataType: 'json',
                success: function (data) {
                    if (data['success']){
                        $('#cartCountItems').html(data['countItems']);
                        console.log(data['Content']);
                        $('#above_success').css('display', 'block');
                        $('#success').html(data['Content']);
                    }
                }
            })
        }
    </script>
    <style>
        input[type=checkbox] {
            display: none;
        }
        .checkbox label:before {
            border-radius: 3px;
        }
        input[type=checkbox]:checked + label:before {
            content: "\2713";
            text-shadow: 1px 1px 1px rgba(0, 0, 0, .2);
            font-size: 20px;
            /*color: #f3f3f3;*/
            color: #2f2f2f;
            text-align: center;
            line-height: 15px;
        }

        label {
            display: inline-block;

            cursor: pointer;

            position: relative;

            padding-left: 25px;

            margin-right: 15px;

            font-size: 16px;

        }

        label:before {
            content: "";

            display: inline-block;


            width: 20px;
            height: 20px;

            margin-right: 10px;

            position: absolute;

            left: 0;

            bottom: 1px;

            /*background-color: #2f2f2f;*/
            /*background-color: #000;*/
            border: 1px solid #2f2f2f;

            /*box-shadow: inset 0px 2px 3px 0px rgba(0, 0, 0, .3), 0px 1px 0px 0px rgba(255, 255, 255, .8);*/

        }

    </style>

    <script>

    </script>
@endsection
