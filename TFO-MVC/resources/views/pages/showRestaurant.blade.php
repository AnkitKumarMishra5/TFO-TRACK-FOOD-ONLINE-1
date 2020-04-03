@extends('layouts.app')
@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class= "row">
            <div class="col-lg-3">
                <img class="Jumb" src="{{food->image}}">
            </div>
            <div class="col-lg-5">
                <h2 class="display">{{food->name}}</h2>
                <div>
                    <div class="lead">{{food->description}}</div>
                    <div class="read">{{food->address}}</div>
                    <br>
                    <div class="stars">
                        <div class="rating">
                            <div class="_4">
                                <span>
                                    <span class="far fa-star"></span>
                                    @php echo $count @endphp.0
                                </span>
                            </div>
                            <div class="_50">
                                <span>50+ Ratings</span>
                            </div>
                        </div>
                        <div class="rating">
                            <div class="_4">
                               <span> 35 mins</span> 
                            </div>
                            <div class="_50">
                                CaC Time
                            </div>
                        </div>
                        <div class="rating">
                            <div class="_4">
                               <span> 30 mins</span> 
                            </div>
                            <div class="_50">
                                Delivery Time
                            </div>
                        </div>
                        <div class="rating">
                            <div class="_4">
                                <span>₹ 250</span>
                            </div>
                            <div class="_50">
                                Cost for Two
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="col-lg-3">
                <img class="any" src="{{asset('images/Logo.jpg)}}">
            </div>
        </div>  
    </div>
    @if(count($foods)==0)
    <div class="container">
        <div class="row">
            
            <div class="col-md-10">
                <div class="row">
                    @foreach($foods as $food)
                    <div class="col-md-4 defi">
                        <div class="card">
                            <img class="boximage" src="{{$food->image}}">
                            <div class="card-body">
                                <h4 class="card-title">{{$food->name}}</h4>
                                <p class="card-text">{{$food->description}}</p>
                                <p><span style="font-size:2em;"><strong>₹{{$food->cost}}</span>/plate</strong></p>
                                <a href="/cart?restaurant={{$restaurant}}&food_item={{$food->name}}" class="btn btn-primary atc">Add to cart</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-2">
                    @php
                        $sql="SELECT * FROM cart";
                        $result=mysqli_query($conn,$sql);
                        $subtotal=0;
                        if(mysqli_num_rows($result)==0)
                        {
                    @endphp
                    <div class="right1">
                                <div class="write">Cart Empty</div>
                                <img src="{{asset('images/cute.png)}}" class="cute">
                                <div class="quotes">
                                    Good Food, Good life!
                                </div>
                    </div>
                    @else
                    <div class="right2" style="margin-top:-40px;">
                        <div class="cart1"> Cart 
                            <div class="cart2"> 1 Item </div>
                        </div>
                        <div class="upper">
                            <div class="pad">
                                <div class="maggie">
                                    @php
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                    $subtotal+=$row['cost'];
                                    @endphp
                                    <div class="pura">
                                        <div class="naam">
                                            <div class="chhotu" style="margin-top:-10px;">
                                               <img src="https://img.icons8.com/color/16/000000/vegetarian-food-symbol.png">
                                            </div>
                                            <div class="now" style="margin-top:-10px;">
                                                @php echo $row['name'] @endphp
                                            </div>
                                        </div>
                                            <div class="def-number-input number-input safari_only" style="width:50%; margin-top:70px;">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                                    class="minus"></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                                    class="plus"></button>
                                            </div>
                                    </div>
                                    @php
                                    }
                                    @endphp
                                </div>
                            </div>
                        </div>
                        <div class="lower">
                            <div class="lower1">
                                <div class="subtotal">Subtotal</div>
                                <div class>
                                    <span class="rat">₹{{$subtotal}}</span>
                                </div>
                            </div>
                            <div class="extra">
                                Extra Charges Apply
                            </div>
                            <a href="/checkout?restaurant=?{{$food->name}}" class="btn _1gPB7">Checkout →</a>
                        </div>

                    </div>
                    @endif
            </div>
        </div>
    </div>
@stop