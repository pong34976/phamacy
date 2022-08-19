<?php
//// ... more code here ...

// if 'upload image' buttton is clicked
if (isset($_POST['uploading_file'])) {
	// Get image name
  	$image = $_FILES['post_image']['name'];

  	// image file directory
  	$target = "../test/images/" . basename($image);

  	if (move_uploaded_file($_FILES['post_image']['tmp_name'], $target)) {
  		echo base_url() . $target;
  		exit();
  	}else{
  		echo "Failed to upload image";
  		exit();
  	}
}
?>