<link href="<?=base_url("src/ihover.css")?>" rel="stylesheet">
<style>
.uk-position-center{

  top: 65%;

}
</style>
 <?php // print_r($result);?> 
 
 <div class="uk-position-center">
 <div class="mh-header-text">
 <div class="bs-example">

<!-- Top to bottom-->
<div>
<div class="row " >
  <div class="col-sm-3">
 
    <!-- normal -->
    <div class="ih-item circle effect10 top_to_bottom "><a  > 
        <div class="img"><img src='data:image/jpeg;base64,<?=base64_encode($result->profile_image)?>'></div>
        <div class="info">
          <h3><?=$result->full_name?></h3>
          
          <p >  แก้ไข  </p>
        </div></a> <a class="uk-button uk-button-primary" href="<?=base_url("blog/create_blog")?>"><h2>เขียนบล็อกใหม่</h2></a> </div> 


        
    <!-- end normal -->
 
 
 </div></div></div>