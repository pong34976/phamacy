<?php //print_r($_SERVER["var"]);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="<?=base_url('js/jquery-1.11.2.min.js')?>"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>

.box{
  position: absolute  ;
  height:100%;
  /*height:90%;*/
  width:100%;
 left:0px;
 z-index: 1;
 background: url(<?=base_url('imagesweb/play-button.png')?>);
 

 background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center; 
 
 
   /* display: none;*/
}
.box div{
  position: static; font-size:100px;
}
 
@media only screen and (max-width: 800px) {
  .box {
   /* display: inline;*/
    
  }
}
/*audio{
width: 150px;

display: block;

margin:20px;
}*/
audio
{
  zoom: 300%;
  left:0;
  bottom: 0;

  position: static  ;
  width:100%;
  /* height:500; */
}
 
</style><script async custom-element="amp-audio" src="https://cdn.ampproject.org/v0/amp-audio-0.1.js"></script>
</head>
 <body  align="center" onclick="playVid()"  >
<?php if($result->inmedia!='0'){?>
<button class="box"  src="<?=base_url('imagesweb/play-button.png')?>" style=""   > </button><?php }?>
<h1><?php print_r($result->phamacy_title);?></h1>
 
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 90%;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  /* max-width: 100% !important; */
  cursor: pointer;
  position: absolute;
  top: 0%;
  height: 100% !important;
  width: auto;
  padding: 16px;
  /* margin-top: -22px; */
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  background-color: rgba(0,0,0,0.8);
}
a.prev div,a.next div{
  top: 50% !important; 
}
/* Position the "next button" to the right */
.prev {
  left:-50;
  border-radius: 3px 0 0 3px;
}
.next {
  right: -50;
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
  cursor: pointer;
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
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
 

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext"> </div>
  <img src="data:image/jpeg;base64,<?=base64_encode($result->image_title)?>" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext"> </div>
  <img src="data:image/jpeg;base64,<?=base64_encode($result->image_detail)?>" style="width:100%">
  <div class="text">Caption Two</div>
</div>
 
<a class="prev" onclick="plusSlides(-1)"> <div>❮</div></a>
<a class="next" onclick="plusSlides(1)"><div>❯</div></a>
<?php if($result->inmedia=='0'){echo "ไม่มีเสียงยา NULL";}else{?>
<audio  id="test-audio-element"
 width="300"  height="32" controls="controls"  src="data:audio/mp3;base64,<?=base64_encode($result->inmedia)?>" type="audio/mpeg">
 
 
</audio><?php }?>
</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <!-- <span class="dot" onclick="currentSlide(3)"></span>  -->
</div>


 




<!-- <div><?php if($result->image_title=='0'){echo "ไม่มีตัวอย่างยา NULL";}else{?> -->
<!-- <img  style="padding:20px;"    src="data:image/jpeg;base64,<?=base64_encode($result->image_title)?>" width="700"   /> -->
<!-- <?php }?><br></div> -->
<div>
<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
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

 <script>
var vid = document.getElementById("test-audio-element"); 

function playVid() { 
  $(".box").remove();
 //alert(vid.duration);
 
    return vid.paused ? vid.play() : vid.pause();

} 
 
</script>
  <h1><?php if($result->image_detail=='0'){echo "ไม่มีข้อมูลยา NULL";}else{?>
    <!-- <img  style="padding:20px;"    src="data:image/jpeg;base64,<?=base64_encode($result->image_detail)?>" width="80%"   /> -->
  <?php }?>
  </h1>
</div> 
 
</body>
</html>
