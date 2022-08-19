<style>
.testfile{
    top:20px;
    position: static  ;
}
</style>
   <link rel="stylesheet" href="<?= base_url('css/uikit.min.css') ?>" />
 <script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery/jquery-1.4.2.js"></script>
  </head>
  <body><form class="uk-form-stacked" action="" method="POST"  enctype="multipart/form-data">

     <div class="uk-margin">
        
        <div class="uk-form-controls">
        <label class="uk-form-label" for="form-stacked-text">ชื่อยา</label>
            <input class="uk-input"  name="title" type="text" placeholder="กรอกชื่อยา"> 
            <input class="uk-input" name="create" type="hidden" value="1" >
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
            $('#audio + media').remove();
            $('#media').after('<audio controls="" src="'+e.target.result+'" type="audio/mpeg" autoplay=""> </audio>');
        }
        reader.readAsDataURL(input.files[0]);
    }
}
    </script>
 <br><br><br>
   <label class="uk-form-label testfile" for="image_title">ตัวอย่างรูปภาพยา</label><div id="img" >   </div>
   <label class="uk-form-label testfile" for="inmedia">ตัวอย่างเสียง</label><div id="media" >   </div><br>
    <label class="uk-form-label testfile" for="image_detail">ตัวอย่างรุป</label><div id="img2" >   </div><br>
 
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
   
    

	</form >
 