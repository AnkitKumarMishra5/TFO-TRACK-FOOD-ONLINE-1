<html>
<head>
  <title>Track Food Online</title>
  <link rel="icon" type="image/ico" href="@yield('icon')">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <link href="{{asset('fontawesome-free-5.12.0-web/fontawesome-free-5.12.0-web/css/all.min.css')}}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Gotu&display=swap" rel="stylesheet">
  <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'>

  <link href="{{asset('stylesheets/style5.css')}}" rel="stylesheet">
  <link href="{{asset('stylesheets/style3.css')}}" rel="stylesheet">
  <link href="{{asset('stylesheets/style2.css')}}" rel="stylesheet">
  <link href="{{asset('stylesheets/style4.css')}}" rel="stylesheet">
  <link href="{{asset('stylesheets/index.css')}}" rel="stylesheet">

  <script src="{{asset('scripts/script2.js')}}"></script>
  <script src="{{asset('scripts/order.js')}}"></script>

</head>
<body>
<nav class="navbar navbar-dark"  style="background-color: rgba(31,122,61,0.8)">
  <div class="container">
    <div class="navbar-header">
    <a class="navbar-brand" href="#">
        <img src="{{asset('images/Logo.jpg')}}" width="30" height="30" class="d-inline-block align-top" alt="TFO">
        <span>Track Food Online</span>
    </a>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
      <ul class="nav navbar-nav">
        <li class="@yield('Home')"><a href="#">Home</a></li>
        <li><a href="@yield('Orders')">Orders</a></li>
        <li><a href="@yield('About Us')">About Us</a></li>
        <li><a href="@yield('Contact Us')">Contact Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        @if(Session::has('user'))
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Hi, {{Session::get('user')}}</a></li>
        <li><a href="/logout"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        @else
        <li><a href="#"><i class="fas fa-user-plus"></i> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Log In</a></li>
        @endif
      </ul>
  </div>
</nav>