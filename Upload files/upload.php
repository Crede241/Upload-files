<?php
	
	// Include database connectivity
	
	include_once('dbConfig.php');
	
	// upload file using move_uploaded_file function in php
	
	if (!empty($_FILES['image']['name'])) {

	    $fileName = $_FILES['image']['name'];
		
	    $fileExt = explode('.', $fileName);
	    $fileActExt = strtolower(end($fileExt));
	    $allowImg = array('png','jpeg','jpg');
	    $fileNew = rand() . "." . $fileActExt;  // rand function create the rand number 
	    $filePath = 'uploads/'.$fileNew; 

	if (in_array($fileActExt, $allowImg)) {
	    if ($_FILES['image']['size'] > 0  && $_FILES['image']['error']==0) {
		$query = "INSERT INTO table_images (images) VALUES('$fileNew')";
	        if ($con->query($query)) {
		    move_uploaded_file($_FILES['image']['tmp_name'], $fileNew);
    		    echo '<img src="'.$fileNew.'" style="width:320px; height:300px;"/>';
	        }else{
		    return false;
	        }	
	      }else{
	        return false;
	    }
	}else{	
    	    return false;
	}
    }

?>