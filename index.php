<?php


// Download Images



	$website = 'http://www.imgur.com';
	include_once("assests/model/handler.php");
    $controller = new handle($website);
    $controller->downloadImages();
    $controller->resizeImages();



// Resize images


	//include_once("assests/model/handler.php");




  


    ?>