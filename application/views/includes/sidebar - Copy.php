<div uk-sticky="media: 960" class="uk-navbar-container tm-navbar-container uk-sticky uk-active uk-sticky-below uk-sticky-fixed" style="position: fixed; top: 0px; width: 1349px;">
<div class="uk-container uk-container-expand"><nav class="uk-navbar"><div class="uk-navbar-left"><a href="../" class="uk-navbar-item uk-logo">
<img uk-svg="" src="../images/uikit-logo.svg" class="uk-margin-small-right" hidden="true"><svg width="28" height="34" viewBox="0 0 28 34" xmlns="http://www.w3.org/2000/svg" class="uk-margin-small-right uk-svg" data-svg="../images/uikit-logo.svg">

	 
</svg> UIkit </a></div> 
<div class="uk-navbar-right">
<ul class="uk-navbar-nav uk-visible@m"><li>
<a href="<?=base_url()?>register">Index</a></li>
 <li <?php if($_SERVER["PATH_INFO"]=="/blog"){echo 'class="uk-active"';}?>><a href="<?=base_url()?>blog">Blog</a></li> 
 <li <?php if($_SERVER["PATH_INFO"]=="/blog/create_blog"){echo 'class="uk-active"';}?>><a href="<?=base_url()?>blog/create_blog">createBlog</a></li></ul> 
 <div class="uk-navbar-item uk-visible@m">
  
 </div></nav></div></div>