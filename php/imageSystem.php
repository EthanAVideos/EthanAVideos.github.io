<?php
function loadDusterImgs() { //73-duster.php
	// HTML code to be included
	$html = '

	<?php
  					$image_folder = "content/images/imageSystem/73-duster/";
 					$images = glob($image_folder . "*.{JPG jpg,heic}", GLOB_BRACE);

  					foreach ($images as $image) {
    				$imageFileName = basename($image);
    				echo "<a href='" . $image . "' target='_blank' title='Click me to view full screen'>";
    				echo "<img src='" . $image . "' alt='If this text is seen a image failed to load.' width='150' height='80' />";
    				echo "</a>";
 					 }
				?>


	return $html;
}

// Templates

//<?php
  			 //  $image_folder = "content/images/imageSystem/";
 			//   $images = glob($image_folder . "*.{JPG,jpg,heic}", GLOB_BRACE);

  			//	foreach ($images as $image) {
    		//	$imageFileName = basename($image);
    	  	//	echo "<a href='" . $image . "' target='_blank' title='Click me to view full screen'>";
    		//	echo "<img src='" . $image . "' alt='If this text is seen a image failed to load.' width='150' height='80' />";
    		//	echo "</a>";
 			//	 }
			 // Dont for get the php ending tag!
?>