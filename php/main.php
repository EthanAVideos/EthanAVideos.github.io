<?php
// Main contains functions for main parts of the site like html, head, meta tags, loaded resources & much more.

function mainTopStart() { // This contains <DOCTYPE! html>, <html>, <head>
	// Add HTML code.
	$html = '<!DOCTYPE html>
<html>
	<head> ';
	return $html;
}

function mainTopEndStart() { // This contains meta, links, loaded resources, </head>, <body>
	// Add HTML code.
	$html = '<meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="styles/style.css" rel="stylesheet" type="text/css">
            <link rel="shortcut icon" href="https://raw.githubusercontent.com/EthanAVideos/projects-for-mikesmopars/main/MikesMopars%20Logos/mikesmopars02.png" /> <!-- Browser Tab Icon -->
	    <!-- Google Loaded Data -->
	    </head>
	    <body>';
	return $html;
}

function mainSiteEnd() { // This contains </body>, </html>
	// Add HTML code.
	$html = '	</body>
</html>';
	return $html;
}

// Navbars

function navBar() { 
	// HTML code to be included
	$html = '<!-- PC Navbar -->
<div id="navbar"><br>
		<a href="index" id="nav-element">Home</a>
		<a href="73-duster" id="nav-element">73 Duster</a>
</div>
<!-- End Of Navbars -->';

	return $html;
}


// Template
//function funcNameHere() { 
	// HTML code to be included
//	$html = '';

//	return $html;
//}
?>