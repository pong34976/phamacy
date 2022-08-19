
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.js"></script>
  </head>
  <body><form class="uk-form-stacked" action="" method="POST"  enctype="multipart/form-data">

     <div class="uk-margin">
        
        <div class="uk-form-controls">
        <label class="uk-form-label" for="form-stacked-text">ชื่อเรื่อง</label>
            <input class="uk-input"  name="title" type="text" placeholder="Some text..."> 
            <input class="uk-input" name="createblog" type="hidden" value="1" placeholder="Some text...">
        </div>
     
    </div>
    <div class="js-upload" uk-form-custom>
    <label class="uk-form-label" for="form-stacked-text">รูป</label><div id="img" >   <button class="uk-button uk-button-default" type="button" tabindex="-1">Select</button></div><br>
    <input type="file" name="image_title" onchange='filePreview(this);'>
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
  
</div>	
<br> 
<input  class="uk-button uk-button-primary"  type="submit"> 
    <textarea class="summernote " id="detail" name="detail"></textarea>
    <script>

 

      $(document).ready(function() { 
         $('.summernote').summernote({
      
  hint: {
    mentions: ['วินเทจ', 'อาหาร', 'ที่เที่ยว', 'david'],
    match: /\B@(\w*)$/,
    search: function (keyword, callback) {
      callback($.grep(this.mentions, function (item) {
        return item.indexOf(keyword) == 0;
      }));
    },
    content: function (item) {
      return '@' + item;
    }    
  },
    maximumImageFileSize: 1572864, // 1.5MB
  });
});
    </script>

	</form >
 