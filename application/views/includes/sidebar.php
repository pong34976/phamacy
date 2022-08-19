 <?php 
 if(!isset($main_content)){
    $main_content="";
 }
 
 ?>
<div class="uk-container">
    <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar uk-sticky>
        <div class="uk-navbar-left">
            <ul class="uk-navbar-nav">
                
                <li class="<?php if($main_content=="blog"){echo "uk-active";}else{echo "uk-parent"; }?> ad_navtext_toggle"><a href="<?=base_url('blog/blog')?>">BLOG NEW</a></li>
                <li class="<?php if($main_content=="categories"){echo "uk-active";}else{echo "uk-parent"; }?> ad_navtext_toggle"><a href="<?=base_url('blog/Categories')?>">categories</a></li>

                <li class="<?php if($main_content=="group"){echo "uk-active";}else{echo "uk-parent"; }?> ad_navtext_toggle"><a href="<?=base_url('blog/group')?>">เกี่ยวกับเรา</a></li>

                <li class="ad_navicon_toggle"><a href="" uk-icon="icon: menu"></a></li>
                <div uk-dropdown>
                    <ul class="uk-nav uk-dropdown-nav">
                        <li class="uk-nav-header"><a href="<?=base_url('blog/blog')?>">BLOG NEW</a></li>
                        <li class="uk-nav-divider"></li>
                        <li class="uk-nav-header"><a href="<?=base_url('blog/categories')?>">Categories</a></li>
                        <li class="uk-nav-divider"></li>
                        <li class="uk-nav-header"><a href="<?=base_url('blog/group')?>">เกี่ยวกับเรา</a></li>
                        <li class="uk-nav-divider"></li>
                    </ul>
                </div>
            </ul>
        </div>
  
        <div class="uk-navbar-right">
            <ul class="uk-navbar-nav">
            <li class="ad_navtext_toggle"><a href="#"></a></li>
                <?php if($this->session->username){?>  
           
                    <li class="ad_navicon_toggle"><a href="<?=base_url('user/profile')?>" uk-icon="icon: user"></a></li>
                    <li class="ad_navicon_toggle"><a href="<?=base_url('user/logout')?>" uk-icon="icon: sign-out"></a></li>
                <li class="<?php if($main_content=="user/profile"){echo "uk-active";}else{echo "uk-parent"; }?> ad_navtext_toggle"><a href="<?=base_url('user/profile')?>">PROFILE</a></li>
              <li class="ad_navtext_toggle"><a href="<?=base_url('user/logout')?>">LOGOUT</a></li> 
         <?php }  else {?>  <li class="uk-active ad_navtext_toggle"><a href="<?=base_url('user/login')?>">LOGIN</a></li> 
            <li class="ad_navicon_toggle"><a href="<?=base_url('user/login')?>" uk-icon="icon: sign-in"></a></li>
          <?php }?>
              
            
      
            </ul>
        </div>
    </nav>
         </div>
      <div class="main"><div class="content">
<!--end navigation panel -->