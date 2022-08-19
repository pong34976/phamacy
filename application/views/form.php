<?php
//($result->phamacy_title=="" ? $pha['phamacy_title'] = $result->phamacy_title : $pha['phamacy_title']="")
$pha['phamacy_title']="";

$pha['image_title']="";
$pha['inmedia']="";
$pha['image_detail']="";
$pha['phamacy_title'] = $result->phamacy_title ?? "";

if(isset($result->image_title)){

    $pha['image_title'] = ba64($result->image_title) ?? "";
}
if(isset($result->inmedia)){
$pha['inmedia'] = ba64($result->inmedia,"audio")  ?? "";
}
if(isset($result->image_detail)){
$pha['image_detail'] = ba64($result->image_detail) ?? "";
}
?>
 
     <div class="uk-margin">
        
        <div class="uk-form-controls">
        <label class="uk-form-label" for="form-stacked-text">ชื่อยา</label>
            <input class="uk-input"  name="title" type="text" value="<?=$pha['phamacy_title']?>" placeholder="กรอกชื่อยา"> 
         
        </div>
     
    </div>
    <div class="js-upload" uk-form-custom>
    <br>
    <label for="image_title">เลือกรูปภาพยา</label>
    <input type="file" name="image_title" id="image_title"  accept="image/*" onchange='filePreview(this);'>
    <label for="image_title">เลือกไฟล์เสียง</label>
	<input type="file" name="inmedia" id="inmedia"  accept="audio/*" onchange='filePreview2(this);'>
    <label for="image_detail">เลือกรูปวิธีใช้</label>
	<input type="file" name="image_detail" id="image_detail"  accept="image/*"  onchange='filePreview3(this);'>
 
 <br><br><br>
   <label class="uk-form-label testfile" for="image_title"><?php 
   function ba64($code,$file="img"){
       if($file=="img"){ 
        $data = ($code!="" ? '<img class="olg" src="data:image/jpeg;base64,'.base64_encode($code).'" width="450" height="300"/>' : '' );
    }else{
        $data = ($code!="" ? '<audio  class="olg" controls="" src="data:audio/mp3;base64,'.base64_encode($code).'" type="audio/mpeg" autoplay=""> </audio>' : '' );
    }
   
   return $data;
   } 
   ?>ตัวอย่างรูปภาพยา<br>  
   </label><div id="img" ></div><?=$pha['image_title']?>
   <label class="uk-form-label testfile" for="inmedia">ตัวอย่างเสียง<br>

   </label><div id="media" ></div><?=$pha['inmedia'] ?><br>
    <label class="uk-form-label testfile" for="image_detail">ตัวอย่างรุป
    <br>
  
    </label><div id="img2" > </div><?=$pha['image_detail'] ?><br>
    <script>
    function filePreview(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
           
            $('#img + img').remove();
            $('#img').after('<img src="'+e.target.result+'" width="450" height="300"/>');
        }
        reader.readAsDataURL(input.files[0]);
    }
}
    </script>
	<script>
    function filePreview2(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#media + audio').remove();
            $('#media').after('<audio controls="" src="'+e.target.result+'" type="audio/mpeg" autoplay=""> </audio>');
        }
        reader.readAsDataURL(input.files[0]);
    }
}
    </script>
    <script>
    function filePreview3(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#img2 + img').remove();
            $('#img2').after('<img src="'+e.target.result+'" width="450" height="300"/>');
        }
        reader.readAsDataURL(input.files[0]);
    }
}
    </script>
   
</div>	
<br> 
<input  class="uk-button uk-button-primary"  type="submit"> 
   
    
