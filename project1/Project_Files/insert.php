<?php
if (isset($_FILES['image'])) {
 require "init.php";
 
 $kind=$_POST["kind"];
$color=$_POST["color"];
$dis=$_POST["dis"];
$price1=$_POST["price"];
$type=$_POST["type"];
 $price=(int)$price1;

	$error=array();
	$file_name = $_FILES['image']['name'];
	$file_size = $_FILES['image']['size'];
	$file_tmp = $_FILES['image']['tmp_name'];
	$file_type = $_FILES['image']['type'];
	$file_ext = strtolower(end(explode('.', $_FILES['image']['name'] )));
	
	$extensions = array("jpeg","jpg","png");
	
	if (in_array($file_ext, $extensions)== false){
		$error[]="please choose jpeg, jpg, png ";
		echo"shit";
		
	}
	if (empty($error)== true){
		$ss="select * from Asas ORDER BY Idd DESC ";
		$tt=mysqli_query($con,$ss);
		$row=mysqli_fetch_array($tt,MYSQLI_NUM);
		$num=$row[0]+1;
		
		move_uploaded_file($file_tmp,"uploads/". "product-".$num.".jpeg" );
		
		list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode("ad", $_SERVER['HTTP_REFERER']);
		
		$path = $user."uploads/"."product-".$num.".jpeg";
		
		$sql = "insert into Asas(kind,color,dis,price,type,image) values('$kind','$color','$dis','$price','$type','$path')";
		$result= mysqli_query($con,$sql);
		
		
		
	if($result){
		echo "تمت الاضافة بنجاح";
	}
	}
	
    }

?>
