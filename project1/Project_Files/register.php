<?php

require "init.php";
$kind=$_POST["number"];
$color=$_POST["name"];
$dis=$_POST["address"];
$price=$_POST["phone"];

$sql = "insert into Orders(Name,Adress,Phone,Product_id) values('$color','$dis','$price','$kind')";
		$result= mysqli_query($con,$sql);
		$ss="select * from Orders ORDER BY Order_Id DESC ";
		$tt=mysqli_query($con,$ss);
		$row=mysqli_fetch_array($tt,MYSQLI_NUM);
		
		
mysqli_close($con);
?>
<HTML>
<!DOCTYPE html>
<html>
<title>Orders </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<style>
body, html {
  height: 100%;
  font-family: "Inconsolata", sans-serif;
  background-color:#d9d9d9;
}
h1{
text-align:center;
color:#0099cc;
font-weight: bold;
 min-height: 100px;
}
h2{
text-align:center;
color:#0099cc;
font-weight: bold;
font-weight: bold;
 min-height: 100px;
}
#imm {
	position: center;

  float: center;
  border: 1px solid #ddd;
  border-radius: 20px;
  padding: 20px;
  width: 600px;
  height: 400px;
}
#col-1 {
  position: relative;
  width: 40%;
  float: left;
height: 600px;
   text-align: center;
  z-index: 1010101010;
  min-height: 20%;
}

#col-2 {
  position: relative;
  width: 40%;
  float: right;
  height: 600px;
   text-align: center;
  z-index: 1010101010;
  min-height: 20%;
}

</style>
<BODY>
<h1> تم تسجيل طلبك بنجاح ورقم طلبك هو</h1>
<br/><h1><?php echo $row[0]; ?></h1>

</div>

</BODY>
</HTML>