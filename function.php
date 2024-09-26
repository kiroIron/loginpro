<?php

function uploadimg($image){
        $imageName = $_FILES [$image]['name']; 
        $imageLocation = $_FILES [$image]['tmp_name']; 

        $newimageName = time() . rand() . $imageName ;

        $path = "images/$newimageName";
        move_uploaded_file($imageLocation ,$path);
    return $path;
 }

 ?>