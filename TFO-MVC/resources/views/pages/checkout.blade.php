@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="col-lg-6">
                    <div class="card" style="height:auto; box-shadow:none; background-color:white;">
                        <h2 class="card-header font2">Delivery Address</h2>
                        <div class="card-body">
                            <form>
                                <div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput2">City <span class="red">*</span> </label>
                                        <input type="text" class="form-control input" id="formGroupExampleInput2"
                                            required placeholder="Enter your city name">
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput3">PinCode <span class="red">*</span></label>
                                        <input type="text" class="form-control input" id="formGroupExampleInput3"
                                            maxlength="6" required="" placeholder="Enter your pincode">
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput4">Location <span class="red">*</span></label>
                                        <input type="text" class="form-control input" id="formGroupExampleInput4"
                                            required placeholder="Location/ LandMark">
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput5">Street <span class="red">*</span> </label>
                                        <input type="text" class="form-control input" id="formGroupExampleInput5"
                                            required placeholder="Full Address">
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput6">Contact Number <span class="red">*</span>
                                        </label>
                                        <input type="text" class="form-control input" id="formGroupExampleInput6"
                                            maxlength="10" required="" placeholder="Enter your Phone Number">
                                    </div>
                                </div>
                                <button class="btn btn-lg done" type="button"
                                    style="float:right; width: -webkit-fill-available;padding: 10px 16px;"> Submit
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="info">
                        <br>

                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="row">
                    <div class="card" id="method-of-payment" style="height:50%;box-shadow:none; background-color:white;">
                        <h2 class="card-header font2">Payment Method</h2>
                        <div class="card-body">
                            <div>
                                <!-- Trigger the modal with a button -->
                                <button type="button" class="btn btn-lg pay-method" id="dcbtn" data-toggle="modal"
                                    data-target="#myModal">Debit Card</button>
                                <!-- Modal -->
                                <div class="modal fade" id="myModal" role="dialog">
                                    <div class="modal-dialog">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close"
                                                    data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Add your card details</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="card-details">
                                                    <aside>Name On Card:</aside>
                                                    <input type="text" name="name" placeholder="Name On Card"
                                                        required="" />
                                                </div>
                                                <aside>Card Number:</aside>
                                                <div class="card-container">
                                                    <div class="card-type"></div>
                                                    <input type="text" name="card number"
                                                        placeholder="0000 0000 0000 0000" maxlength="19"
                                                        onkeyup="$cc.validate(event)" required="" />
                                                    <div class="card-valid"><i class="fa fa-check"
                                                            aria-hidden="true"></i></div>
                                                </div>
                                                <div class="card-details agileits-Payouts">
                                                    <div class="expiration">
                                                        <aside>Expiration Date</aside>
                                                        <input type="text" name="date"
                                                            onkeyup="$cc.expiry.call(this,event)" maxlength="7"
                                                            placeholder="mm/yyyy" required="" />
                                                    </div>
                                                    <div class="cvv">
                                                        <aside>CVV</aside>
                                                        <input type="text" name="cvv" placeholder="XXX" maxlength="3"
                                                            required="" />
                                                    </div>
                                                    <div class="clear"> </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" id="paybtn1"
                                                    data-dismiss="modal">
                                                    PAY
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div>
                                <!-- Trigger the modal with a button -->
                                <button type="button" class="btn btn-lg pay-method" id="ccbtn" data-toggle="modal"
                                    data-target="#myModal1">Credit Card </button>
                                <!-- Modal -->
                                <div class="modal fade" id="myModal1" role="dialog">
                                    <div class="modal-dialog">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close"
                                                    data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Add your card details</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="card-details">
                                                    <aside>Name On Card:</aside>
                                                    <input type="text" name="name" placeholder="Name On Card"
                                                        required="" />
                                                </div>
                                                <aside>Card Number:</aside>
                                                <div class="card-container">
                                                    <div class="card-type"></div>
                                                    <input type="text" name="card number"
                                                        placeholder="0000 0000 0000 0000" maxlength="19"
                                                        onkeyup="$cc.validate(event)" required="" />
                                                    <div class="card-valid"><i class="fa fa-check"
                                                            aria-hidden="true"></i></div>
                                                </div>
                                                <div class="card-details agileits-Payouts">
                                                    <div class="expiration">
                                                        <aside>Expiration Date</aside>
                                                        <input type="text" name="date"
                                                            onkeyup="$cc.expiry.call(this,event)" maxlength="7"
                                                            placeholder="mm/yyyy" required="" />
                                                    </div>
                                                    <div class="cvv">
                                                        <aside>CVV</aside>
                                                        <input type="text" name="cvv" placeholder="XXX" maxlength="3"
                                                            required="" />
                                                    </div>
                                                    <div class="clear"> </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" id="paybtn2"
                                                    data-dismiss="modal">
                                                    PAY
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div>
                                <button type="button" class="btn btn-lg pay-method COD">Cash on Delivery</button>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="card" style="height:40%;">
                            <h2 class="card-header">Type of Delivery</h2>
                            <form action="/TFO-PHP/routes/initiate_order.php" method="POST">
                            <div class="card-body">
                                <div>
                                  <center>  <input type="radio" name="delivery-type" value="Collect at Counter" id="Cac"> <h3 style="display:inline-block;">Collect at Counter</h3> </center>
                                </div>
                                <div>
                                    <center>  <input type="radio" name="delivery-type" value="Delivery" id="Delivery"> <h3 style="display:inline-block;">Delivery</h3> </center>
                                  </div>
                                <br>
                            </div>
                        </div>
</div>
                </div>
            </div>
            @php
            if(mysqli_num_rows($result)>0)
            {
                $subtotal=0;
            @
            <div class="col-lg-4">
                <div>
                    <h2>Order Review </h2>
                    <div class="border" style="border:1px  grey; margin-top:-40px; height: 135%;">
                    @php
                        while($row=mysqli_fetch_assoc($result))
                        {
                            $subtotal+=$row['cost'];
                    @endphp
                        <div class="one-item" style="margin-top:30px; display: inline-block; position: relative;">
                        <div class="imagediv">
                            <img class="imagefinal" src="@php echo $row['image'];?>" style="height:60px;">
                        </div>
                        <div class="itemname">
                            Item Name:
                            <span class="name1">@php echo $row['name'];@endphp</span>
                        </div>
                        <div class="def-number-input number-input safari_only" style="height: auto;">
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
                        <div>
                            <input class="form-control form-control-lg formcolor suggestion" type="text"
                                placeholder=" ''Any Suggestions? We will pass it on'''">
                        </div>
                        <div class="det" style="margin-top:30px ;">
                            <div class="formar">
                                <strong>Bill Details:</strong>
                            </div>
                            <div class="formar">
                                Item Total:
                                <span class="name2">₹@php echo $subtotal @endphp.00</span>
                            </div>
                            @php $del=$subtotal*0.1055 @endphp
                            <div class="formar">
                                Delivery Fee:
                                <span class="name3">₹@php echo $del; @endphp</span>
                            </div>
                            @php $dis=$subtotal*0.0555 @endphp
                            <div class="formar">
                                Total Discount:
                                <span class="name4">₹@php echo $dis @endphp</span>
                            </div>
                            @php $tax=$subtotal*0.1855 @endphp
                            <hr>
                            <div class="tax">
                                Taxes and charges:
                                <span class="name5">₹@php echo $tax; @endphp</span>
                            </div>
                            @php $total= $subtotal + $del - $dis + $tax @endphp
                            <hr>
                            <div>
                                <strong>TO PAY: </strong>
                                <span class="name6">₹@php echo $total; @endphp</span>
                            </div>
                        </div>
                        <button type="submit" name="tot-btn" class="btn _1gPB7" style="margin-top:20px;">PLACE ORDER</button>
                        </form>
                    </div>
                </div>
            </div>
            @php
            }
            @endphp
        </div>
    </div>
@stop


