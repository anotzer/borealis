@extends('layouts.app-front')
@section('content')
    <section style="">
        <div class="">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="https://i.ytimg.com/vi/KEc1ugYKHaM/maxresdefault.jpg" alt="First slide" style="max-height: 600px;">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>My Caption Title (1st Image)</h5>
                            <p>The whole caption will only show up if the screen is at least medium size.</p>
                        </div>
                    </div>
                    <div class="carousel-item" style="max-height: 600px;">
                        <img class="d-block w-100" src="https://specials-images.forbesimg.com/imageserve/5f2d59483974decdf5573985/960x0.jpg?cropX1=0&cropX2=1105&cropY1=8&cropY2=617" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>...</h5>
                            <p>...</p>
                        </div>
                    </div>
                    <div class="carousel-item" style="max-height: 600px;">
                        <img class="d-block w-100" src="https://cdn.shazoo.ru/456667_ueodbezE4x_destiny2.jpg" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>...</h5>
                            <p>...</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" style="width:40px;height:40px;" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" style="width:40px;height:40px;" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
    <!-- background-color: #A9A9A9; -->
    <div style="background-image: url('https://preview.redd.it/34uo2onl81d51.jpg?blur=40&format=pjpg&auto=webp&s=15215dfcc5c3b13c946fccc90dee7089d7837c5a'); background-size: cover;">
        <section style="border-bottom: 1px solid black; ">
            <div class="container">
                <br>
                <div class="d-flex justify-content-center"><h1>Orders</h1></div>
                <br>
                <div class="row">
                    @foreach($products as $product)
                    <div class="col-md-4">
                        <div class="card bg-dark text-white" style="padding: 0; margin-left: 5px; margin-top: 10px;">
                            <img src="{{$product->image->path}}" class="card-img" alt="{{$product->title}}">
                            <div class="card-img-overlay">
                                <a
                                    href="{{route('order.page', $product->id)}}"><h5 class="card-title" style="padding: 5px; background-color: rgba(0,0,0,.5)">{{$product->title}}</h5></a>
                            </div>
                            <p class="card-text" style="padding: 5px; background-color: rgba(0,0,0,.5)">{{$product->created_at}}</p>
                        </div>
                    </div>
                    @endforeach
                    <div class="row justify-content-center col-md-12" style="padding-top: 20px;">
                        <?php echo $products->render();?>
                    </div>
                    <!-- <div class="col-md-4" style="margin-top: 20px;">
                        <img class="" src="../main page/images/03ae8e6a8a3950fe22242f99673462fe.png" style="border: 1px solid #0f0f0f">
                    </div>
                    <div class="col-md-4" style="margin-top: 20px;">
                        <img class="" src="../main page/images/03ae8e6a8a3950fe22242f99673462fe.png" style="border: 1px solid #0f0f0f">
                    </div>
                    <div class="col-md-4" style="margin-top: 20px;">
                        <img class="" src="../main page/images/03ae8e6a8a3950fe22242f99673462fe.png" style="border: 1px solid #0f0f0f">
                    </div>
                    <div class="col-md-4" style="margin-top: 20px;">
                        <img class="" src="../main page/images/03ae8e6a8a3950fe22242f99673462fe.png" style="border: 1px solid #0f0f0f">
                    </div> -->
                </div>
            </div>
            <br>
            <br>
        </section>
    </div>
    <section style="">
        <div class="container">
            <br>
            <div class="d-flex justify-content-center"><h1>Rewiews</h1></div>
            <br>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="reviews">
                            <div class="row blockquote review-item">
                                <div class="col-md-3 text-center">
                                    <img class="rounded-circle reviewer" src="http://standaloneinstaller.com/upload/avatar.png">
                                    <div class="caption">
                                        <small>by <a href="#joe">Joe</a></small>
                                    </div>

                                </div>
                                <div class="col-md-9">
                                    <h4>My awesome review</h4>
                                    <div class="ratebox text-center" data-id="0" data-rating="5"></div>
                                    <p class="review-text">My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. </p>

                                    <small class="review-date">March 26, 2017</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="reviews">
                            <div class="row blockquote review-item">
                                <div class="col-md-3 text-center">
                                    <img class="rounded-circle reviewer" src="http://standaloneinstaller.com/upload/avatar.png">
                                    <div class="caption">
                                        <small>by <a href="#joe">Joe</a></small>
                                    </div>

                                </div>
                                <div class="col-md-9">
                                    <h4>My awesome review</h4>
                                    <div class="ratebox text-center" data-id="0" data-rating="5"></div>
                                    <p class="review-text">My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. </p>

                                    <small class="review-date">March 26, 2017</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="reviews">
                            <div class="row blockquote review-item">
                                <div class="col-md-3 text-center">
                                    <img class="rounded-circle reviewer" src="http://standaloneinstaller.com/upload/avatar.png">
                                    <div class="caption">
                                        <small>by <a href="#joe">Joe</a></small>
                                    </div>

                                </div>
                                <div class="col-md-9">
                                    <h4>My awesome review</h4>
                                    <div class="ratebox text-center" data-id="0" data-rating="5"></div>
                                    <p class="review-text">My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. </p>

                                    <small class="review-date">March 26, 2017</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-self-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-self-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- <div class="reviews">
                <div class="row blockquote review-item">
                  <div class="col-md-3 text-center">
                    <img class="rounded-circle reviewer" src="http://standaloneinstaller.com/upload/avatar.png">
                    <div class="caption">
                      <small>by <a href="#joe">Joe</a></small>
                    </div>

                  </div>
                  <div class="col-md-9">
                    <h4>My awesome review</h4>
                    <div class="ratebox text-center" data-id="0" data-rating="5"></div>
                    <p class="review-text">My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. My awesome review. </p>

                    <small class="review-date">March 26, 2017</small>
                  </div>
                </div>
            </div> -->
        </div>
        <br>
        <br>
        <br>
    </section>
@endsection
