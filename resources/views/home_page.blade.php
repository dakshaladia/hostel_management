<!DOCTYPE html>
<html lang="en">
<html ng-app     >

<head>
<meta charset="utf-8">	
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 	
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css"> 


<style>


body{
background-color:lightblue;	
 text-align:center;
 width:50%


 font-size:30px;
 color:black;
height:100%;    
font-size:30px;

}
.nav {
  overflow: hidden;
  background-color: #876;

}

.nav a {
 float: left;
  display: block;
  color: #f5f5f5 ;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;;
  margin:3%;

 	
}
.nav a:hover {
  background-color: #567;
  color: black;
}
.nav a.active {
    background-color: #696;
    color: white;
}
h1{
    text-align: center;
    
}
/*  background-color: #22222;
  /*border: 3px solid #ffffff;*/
 /* -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  -moz-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
}
.slider .indicators .indicator-item.active {
  background-color: #ffffff;
}

.slider .indicators {
  /*bottom: 100px;
z-index: 100; 
  /* text-align: left; 
}*/

</style>
  </head> 
<body>
 

<div class="nav">
  <a class="active" href="#feesstruct">FEES STRUCTURE</a>
  <a href="">FACILITIES</a>
  <a href="">ABOUT US</a>
<image img src={{ asset('storage/images/phone.jpeg') }} style="width: 5%;height: 5%;margin-top: 3%">
<a href="">9866557689</a>
</div>

 <div class="slider">
    <ul class="slides">
      <li>
       
       <img src="../storage/images/Hostel_Dormitory.jpg" style="width:100%;height:450px;">
      <div class="caption center-align">
      
      </li>
      <li>
        <img src="../storage/images/Hostel_Dormitory.jpg"> 
        
      </li>
      <li>
        <img src="../storage/images/Hostel_Dormitory.jpg"> 
       
      </li>
      <li>
       
      </li>
    </ul>
  </div>
     
    
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script>
$(document).ready(function(){
      $('.slider').slider({full_width: true});
     

    });
    </script>
  

<img src="../storage/images/Hostel_Dormitory.jpg" alt="Students in hostel" style="width:100%;height:450px;">
<h1><u>TESTIMONIALS</u></h1>
<p>"What a lovely hostel! Very clean,nice breakfast! The ladies(Tequita and Hannah-sorry for spelling) who worked there were so lovely and told us all the info we needed! Thank You!"</p>
<p>Vinit Payal(Stay Period 2011-2015)</p>

  


</body>


</html>
