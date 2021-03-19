@extends('layout')

@section('title', 'Products')

@section('content')

    <div class="container">
        <h1>商品表：</h1><p>

        <div class="row">
            @foreach($products as $product)
            <div class="col-sm-3 card hover">
               
                <img src="{{ $product->photo }}" class="card-img-top" alt="..." width="100" height="233">
                <div class="card-body">
                       <h4>{{ $product->name }}</h4>
                            
                            <p><strong>價錢: </strong> {{ $product->price }}$</p>
                            <p class="btn-holder">
                            <a href="{{ url('add-to-cart/'.$product->id) }}" class="btn btn-block text-center text-light" role="button">新增至購物車</a> </p>
                </div>
            </div>
                    
                
            @endforeach

        </div>

    </div>

    <style>
    .btn-block{
        background:light;
        transition: 1.5s ease;
        position:relative;
        bottom:-10
    }
    .card:hover a{
        background:rgb(13, 0, 128);
        transition: 1.5s ease;
        transform: translate(-.1%, -.1%);
        
    }
    .hover:hover {
  box-shadow: 0 2px 5px 0 , 0 2px 10px 0 rgba(0, 0, 0, 0.12);
}
    </style>

@endsection