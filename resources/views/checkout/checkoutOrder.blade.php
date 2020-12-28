@extends('layouts.app-front')
@section('content')
    <br>
    <br>

<div class="container col-md-3">
    <div class="row">
        <div class="card">
            <div class="card-header">
                CheckoutOrder
            </div>
            <div class="card-body">
                <label for="name">Name</label>
                <input id="name" type="text" class="form-control" value="{{Auth::user()->name}}" disabled> <br>
                <label for="Address">E-mail</label>
                <input type="text" class="form-control" value="{{Auth::user()->email}}" disabled> <br>
                <label for="name">Order price</label>
                <input type="text" class="form-control" value="" disabled> <br>
                <div class="paypal"></div>
                <br>
                <br>
                <table class="table" style="font-size: 15px;">
                    <thead style="border-top: none;">
                    <tr>
                        <th scope="" style="width: 600px;">items</th>
                        <th scope="" style="width: 200px;">Product price</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($getProducts))
                        @foreach($getProducts as $product => $name)
                            <tr>
                                <th scope=""><img src="{{$name->image->path}}" width="100px" alt=""> <a href="{{route('order.page', $name->id)}}">{{$name->title}}</a></th>
                                <td class="text-center">{{$name->price}}$</td>
                            </tr>
                        @endforeach
                    @else
                        Empty
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
    <br>
    <br>
    <br>
    <script src="https://www.paypal.com/sdk/js?client-id=sb"></script>
    <script>paypal.Buttons().render('.paypal');</script>
@endsection
