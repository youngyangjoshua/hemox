@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="row course-set courses__row">
            @foreach($products as $product)
                <article class="col-md-4 course-block course-block-lessons">
                    <center><img src={{ $product->image_path }}><br>
                    <b>{{ $product->brand->name }}</b><br></center>
                    <center>{{ $product->brand->detail }}</center>
                    <hr>
                    <center>RM {{ $product->price }}</center>
                    <center><strike>RM {{ $product->price*80/100 }} </strike></center>
                    <br>

                    @if($product->storage > 0)
                        <center>
                        <select>
                            @for($i=1; $i<= $product->storage ; $i++){
                                <option value={{ $i }}>{{ $i }}</option>
                            }
                            @endfor
                        </select>
                        <button id="btn_buy_now">Buy Now</button>
                        </center>
                    @else
                        <center>SOLD OUT</center>
                    @endif
                    
                    <br><br>
                </article>
            @endforeach
        </div>

        

        <!-- <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! <br>
                    @foreach($products as $product)
                        {{ $product->brand->name }}. {{ $product->brand->detail }} <br>                        
                    @endforeach

                    You have brought the 
                    @foreach($product_orders as $product_order)
                        {{ $product_order->product->name }}, quantity is {{ $product_order->order->total_quantity }}
                    @endforeach
                    
                </div>
            </div>
        </div> -->
    </div>
</div>
@endsection
