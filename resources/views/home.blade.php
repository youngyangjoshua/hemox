@extends('layouts.app')

@section('content')

@section('after-style')
    <style>
    .buy_now {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}
</style>
@endsection

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
                        <select id="product_quantity_{{$product->id}}">
                            @for($i=1; $i<= $product->storage ; $i++){
                                <option value={{ $i }}>{{ $i }}</option>
                            }
                            @endfor
                        </select>
                        <button id="btn_buy_now" data-productID={{ $product->id }} class='buy_now'>Buy Now</button>
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

@section('after-script')
<script>
    $(document).ready(function(){
        $('.buy_now').click(function(){
            var c = confirm("Are you sure you want to buy this product?");
            if(c==true){
                var product_id = $(this).attr('data-productID');
                var product_quantity = $('#product_quantity_'+$(this).attr('data-productID')).val();
                //alert(product_quantity);
                $.ajax({
                    url:"{{ route('checkout') }}",
                    type:'get',
                    dataType:'json',
                    data: {'product_id':product_id, 'product_quantity':product_quantity},
                    success: function(data){
                        
                        if(data['status']=="success"){
                            window.location.href = data['redirect'];
                        }
                        console.log(data);
                    },
                });
            }
            else
            {
                
            }
        });
    });
</script>
@endsection
