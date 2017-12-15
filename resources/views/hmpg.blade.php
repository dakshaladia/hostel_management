<!DOCTYPE html>
<html lang="en">
<html>

<head>
<meta charset="utf-8">	
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 	
<style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css"> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
body{
background-color:red;	
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
* {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  width: 300px;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
/*.mySlides {
    display: none;
}
*/
/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor:pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

  
</style>

</head>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>	
<body>
 

<div class="nav">
  <a class="active" href="#feesstruct">FEES STRUCTURE</a>
  <a href="">FACILITIES</a>
  <a href="">ABOUT US</a>
<image img src={{ asset('storage/images/phone.jpeg') }} style="width: 5%;height: 5%;margin-top: 3%">
<a href="">9866557689</a>
</div>
<div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="../storage/images/img1.jpeg" style="width:100%">
    <div class="text">Caption Text</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="../storage/images/img2.jpeg" style="width:100%">
    <div class="text">Caption Two</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="../storage/images/img3.jpeg" style="width:100%">
    <div class="text">Caption Three</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
/*<img src="../storage/images/Hostel_Dormitory.jpg" alt="Students in hostel" style="width:100%;height:450px;">*/
<h1><u>TESTIMONIALS</u></h1>
<p>"What a lovely hostel! Very clean,nice breakfast! The ladies(Tequita and Hannah-sorry for spelling) who worked there were so lovely and told us all the info we needed! Thank You!"</p>
<p>Vinit Payal(Stay Period 2011-2015)</p>
</body>
</html>
