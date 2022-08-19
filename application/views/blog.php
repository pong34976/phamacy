 
<br> 
 
 <div class="uk-child-width-1-3@m" uk-grid>
 <?php for($com=0;$com < count($result);$com++){?>
    <a href="<?=base_url('blog/read_blog/'.$result[$com]->blog_id)?>" class="uk-button "> <div  style=" border: 0px solid #ffff;
  border-radius: 10px;">
         <div class="uk-card uk-card-default">
             <div class="uk-card-media-top">
        
 <?php if($result[$com]->image_title){?>   <img src="data:image/jpeg;base64,<?=base64_encode($result[$com]->image_title)?>"  style="height:250px;width:auto;"><?php }?>
          
             <p class="uk-text-meta uk-margin-remove-top"> <img class="uk-border-circle" width="40" height="40" src="data:image/jpeg;base64,<?=base64_encode($result[$com]->profile_image) ?>">
        <?php echo "เขียนโดย ".$result[$com]->full_name." " ?><time datetime="<?=$result[$com]->date_create ?>"><?=$result[$com]->date_create ?></time></p>
             </div>
             <div class="uk-card-body">
           
                
                <h3><?=$result[$com]->blog_title ?></h3>
             </div>
 
             
         </div>
         
     </div> </a>
 <?php }?>
     
     <div>
 
     
 
  <br>
  
   
  
          