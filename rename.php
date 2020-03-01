<?php
	require_once 'conn.php';
	
	if(ISSET($_POST['upload'])){
		$allowed_ext = array("jpg", "png", "jpeg", "gif");
		$ext = explode(".", $_FILES['file']['name']);
		$end = end($ext);
		$file_name=$_POST['filename'];
		
		if(in_array($end, $allowed_ext)){
			if($_FILES['file']['size'] < 1048576){
				$name = $file_name.".".$end;
				$path = "upload/".$name;
				
				if(move_uploaded_file($_FILES['file']['tmp_name'], $path)){
					$conn->query("INSERT INTO `image` VALUES('', '$name', '$path')");
				}
				
				echo "<center><img src='$path' width='200' height='200'/></center>";
				echo"<center><h3>".$name."</h3></center>";
				
			}else{
				echo "File too large to upload";
			}
		}else{
			echo "Invalid file format";
		}
	}
	
	
?>