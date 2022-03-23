<?php

require "init.php";

$user_name=$_POST["user_name"];
$user_password=$_POST["user_password"];
$sql="select Id from Login where user_name='$user_name' and user_password=$user_password";
$result =mysqli_query($con,$sql);

if(!mysqli_num_rows($result)>0)
{
	echo '<script language="javascript">alert("كلمة السر او اسم المستخدم خاطئ")</script>';
	}
	
else
{
	if($result->fetch_assoc()["Id"]<3){
		
        header('Location:https://syr-furniture.000webhostapp.com/admin.php');
	}
}

mysqli_close($con);

?>