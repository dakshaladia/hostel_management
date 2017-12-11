/*<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    
                    Hostel Management Portal 
                    
                </div>
            </div>
        </div>
    </body>
</html>*/
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<html>
<head>
<style>
body{
background-color:lightcyan;
 text-align:center;
 width:50%
padding:20px;
 margin:50px;
 font-size:30px;
 color:black;
height:100%;    
font-size:30px;
padding:50px;
}
.nav {
  overflow: hidden;
  background-color: #333;
}
.nav a {
 float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
.nav a:hover {
  background-color: #ddd;
  color: black;
}
.nav a.active {
    background-color: #4CAF50;
    color: white;
}
h1{
    text-align: center;
    
}
u{
        color: green;
    }
</style>

</head>
<body>
<div class="nav">
  <a class="active" href="#feesstruct">FEES STRUCTURE</a>
  <a href="">FACILITIES</a>
  <a href="">ABOUT US</a>
  
</div>
<img src="Hostel_Dormitory.jpg" alt="Students in hostel" style="width:100%;height:200px;">
<h1><u>TESTIMONIALS</u></h1>
<p>"What a lovely hostel! Very clean,nice breakfast! The ladies(Tequita and Hannah-sorry for spelling) who worked there were so lovely and told us all the info we needed! Thank You!"</p>
<p>Vinit Payal(Stay Period 2011-2015)</p>
</body>
</html>
