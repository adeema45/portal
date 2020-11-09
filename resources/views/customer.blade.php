<!DOCTYPE html>
<html>
<head>
	<title>Customer Login Page</title>
	<style type="text/css">
   .box{
    width:700px;
    margin:2 auto;
    border:1px solid #fff;
   }
  </style>
</head>
<body>
<br />
  <div class="container box">
   <h3 align="center">Customer Login Pagel</h3><br />

   @if(isset(Auth::user()->password))
    <div class="alert alert-danger success-block">
     <strong>Welcome {{ Auth::user()->password }}</strong>
     <br />
     <a href="{{ url('/customer') }}">Invalid Password</a>
    </div>
   @else
    <script>window.location = "/customer";</script>
   @endif
   <br />
</body>
</html>