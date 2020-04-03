@extends('layouts.app')
@section('Home','active')
@section('content')
<div class="container-fluid">
    <div class="row">
        <center>
            <div class="input-group input-group-lg col-lg-9 col-md-9 col-sm-9">
                <input type="text" placeholder="Type a location/restaurant/cuisine to search"
                    class="form-control search-text"><button class="search-btn form-control"><i class="fas fa-search-location"></i> Search</button>
            </div>
        </center>
    </div>
    <div class="row food">

    <div class="col-md-2 sidebar1">
                <br>
                <table>
                    <tr>
                        <td style="width:60%;"> <b>Veg</b> <img style="width: 9%;" src="{{asset('images/veg.png')}}"></td>
                        <td><input type="checkbox" id="tfocheck" value="TFO" name="TFOCertified"></td>
                    </tr>
                    <tr> 
                        <td style="width:60%;"><b>Non-Veg</b><img style="width: 9%;" src="{{asset('images/13.png')}}"></td>
                        <td><input type="checkbox" id="tfochecknon" value="TFO" name="TFOCertified"></td>
                    </tr>
                
                </table>
                <br>
                <br>
                <b>Categories</b>
                <br>
                <br>
                <table>
                    <tr>
                        <td>Breakfast &nbsp; &nbsp; &nbsp; </td> 
                        <td><input type="checkbox" id="tfocheck1" value="TFO" name="breakfast"></td>
                    </tr>
                    <tr>
                        <td>Lunch</td>
                        <td><input type="checkbox" id="tfocheck2" value="TFO" name="Lunch"></td>
                    </tr>
                    <tr>
                        <td>Snacks</td>
                        <td> <input type="checkbox" id="tfocheck3" value="TFO" name="Snacks"></td>
                    </tr>
                    <tr>
                        <td>Italian </td>
                        <td> <input type="checkbox" id="tfocheck4" value="TFO" name="Italian"></td>
                    </tr>
                    <tr>
                        <td>Burger</td>
                        <td> <input type="checkbox" id="tfocheck5" value="TFO" name="Burger"></td>
                    </tr>
                    <tr>
                        <td>Pizza </td>
                        <td> <input type="checkbox" id="tfocheck6" value="TFO" name="Pizza"></td>
                    </tr>
                    <tr>
                        <td>Drinks </td>
                        <td> <input type="checkbox" id="tfocheck7" value="TFO" name="Drinks"></td>
                    </tr>
                </table>
                <br>
                <div>
                    <b>Average Customer Reviews</b><br><br>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span> & MORE
                    <br>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span> & MORE
                    <br>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span> & MORE
                    <br>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span> & MORE
                </div>
                <br>
                <b>Pay On Delivery</b>
                <form>
                    <input type="checkbox" id="codcheck" value="COD" name="CODoption">&nbsp;Eligible for Pay On
                    Delivery<br>or Pay on Collection<br>from the counter<br><br><br>
                </form>

        </div>

        <div class="col-md-8">
            <div class="row">
                @foreach($restaurants as $restaurant)
                <div class="col-md-4 col-sm-6 def">
                    <div class="card" style="width:100%">
                        <img class="card-img-top yoyo" src="{{$restaurant->image}}" height="150px"
                            alt="Card image cap">
                        <div class="overlay">
                            <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3" href="/restaurant?restaurant={{$restaurant->name}}">
                                <i class="fas fa-chevron-right pl-1 icon-5x hello"></i>
                            </a>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">{{$restaurant->name}}</h4>
                            <h6 class="card-text">{{$restaurant->description}}</h6>
                        </div>
                        <div class="card-footer rounded-bottom">
                            <ul class="list-unstyled list-inline font-small">
                                <li class="list-inline-item pr-2 white-text">
                                    <i class="far fa-star {{$restaurant->star1}}"></i>
                                </li>
                                <li class="list-inline-item pr-2">
                                    <i class="far fa-star {{$restaurant->star2}}"></i>
                                </li>
                                <li class="list-inline-item pr-2">
                                    <i class="far fa-star {{$restaurant->star3}}"></i>
                                </li>
                                <li class="list-inline-item pr-2">
                                    <i class="far fa-star {{$restaurant->star4}}"></i>
                                </li>
                                <li class="list-inline-item pr-2">
                                    <i class="far fa-star {{$restaurant->star5}}"></i>
                                </li>
                            </ul>
                        </div>
                        <hr>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        
        <div class="col-md-2 sidebar2"> 
                <div class="card card-cascade">
                    <div class='card right'>
                        <!-- Card content -->
                        <div class="card-body card-body-cascade text-center">
                
                            <!-- Title -->
                            <h3 class="card-title"><strong>Your Rewards</strong></h3>
                            <!-- Subtitle -->
                            <h6 class="font-weight-bold indigo-text py-2">Points earned</h6>
                            <!-- Text -->
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus, ex, recusandae.
                                Facere modi sunt, quod quibusdam.
                               
                            

                            </p>
                            <img id="sale" src="{{asset('images/12.png')}}">
                        </div>
                
                    </div>
                
                </div>
        </div>

    </div>
</div>
@stop