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
  position: static  ;
  width:100%;
  height:500;
}
 
</style><script async custom-element="amp-audio" src="https://cdn.ampproject.org/v0/amp-audio-0.1.js"></script>
</head>
 <body  align="center" onclick="playVid()"  >
<?php if($result->inmedia!='0'){?>
<button class="box"  src="<?=base_url('imagesweb/play-button.png')?>" style=""   > </button><?php }?>
<h1><?php print_r($result->phamacy_title);?></h1>
 




<div><?php if($result->image_title=='0'){echo "ไม่มีตัวอย่างยา NULL";}else{?>
<img  style="padding:20px;"    src="data:image/jpeg;base64,<?=base64_encode($result->image_title)?>" width="700"   />
<?php }?><br><?php if($result->inmedia=='0'){echo "ไม่มีเสียงยา NULL";}else{?>
<audio  id="test-audio-element"
 width="300"  height="32" controls="controls"  src="data:audio/mp3;base64,<?=base64_encode($result->inmedia)?>" type="audio/mpeg">
 
 
</audio><?php }?></div>
<div>
 
 <script>
var vid = document.getElementById("test-audio-element"); 

function playVid() { 
  $(".box").remove();
 //alert(vid.duration);
 
    return vid.paused ? vid.play() : vid.pause();

} 
 
</script>
  <h1><?php if($result->image_detail=='0'){echo "ไม่มีข้อมูลยา NULL";}else{?><img  style="padding:20px;"    src="data:image/jpeg;base64,<?=base64_encode($result->image_detail)?>" width="80%"   />
  <?php }?>
  </h1>
</div> 
 
</body>
</html>
