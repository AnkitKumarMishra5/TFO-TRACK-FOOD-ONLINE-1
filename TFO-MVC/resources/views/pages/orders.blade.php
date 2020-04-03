@extends('layouts.app')
@section('Orders','active')
@section('content')
  <div class="container">
    <div class="row">
      <h1 style="text-align:center" class="font2">Your Orders</h1>
      @php
            if(mysqli_num_rows($result)>0)
            {
                $subtotal=0;
      @endphp
      <table class="table table-striped table-bordered" style="height: 250px;">
      <thead>
          <tr>
            <th class="font1" scope="col">Token Id</th>
            <th class="font1" scope="col">Date</th>
            <th class="font1" scope="col">Delivery Type</th>
            <th class="font1" scope="col">Payment Method</th>
            <th class="font1" scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
        @php
          while($row=mysqli_fetch_assoc($result))
          {
        @endphp
          <tr>
            <th class="font2" scope="row"><?php echo $row['token_id'];?></th>
            <td class="font2">@php echo $row['date'];@endphp</td>
            <td class="font2">@php echo $row['del_type']; @endphp</td>
            <td class="font2">@php echo $row['pay_method']; @endphp</td>
            <td class="font2">@php echo $row['status'];@endphp</td>
          </tr>
          @php
          }
          @endphp
        </tbody>
      </table>
      @php
        }
      @endphp
    </div>
  </div>
@stop