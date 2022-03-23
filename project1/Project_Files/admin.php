<?php

require "init.php";

$ss="select * from Orders  ";
		$tt=mysqli_query($con,$ss);
		


?>

<!DOCTYPE html>
<html>
<title>Admin</title>
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
text-align:left;
color:#0099cc;
font-weight: bold;
font-weight: bold;
 min-height: 100px;
}
h3{
text-align:right;
color:#0099cc;
font-weight: bold;
font-weight: bold;
 min-height: 100px;
}
 .wow{
  background-position: center;
  background-size: cover;

}

#col-1 {
  position: relative;
  width: 50%;
  float: left;
  height: 100px;
   text-align: center;
  z-index: 1010101010;
  min-height: 50%;
  
}

#col-2 {
  position: relative;
  width: 50%;
  float: right;
  height: 100px;
   text-align: left;
  z-index: 1010101010;
  min-height: 50%;
  padding-left:20%;
}
.oo{
padding-top:300px;
}
#go{
	
	min-height: 25%;
}
</style>
<body>
<h1>  Welcome admin</h1>
<a href = "index.html"> <h3>خروج</h3></a>
<div id="go">
<form name="frmImage" enctype="multipart/form-data" action="insert.php"
        method="post" class="frmImageUpload">
		
		<input type="text" name="kind" placeholder="النوع" required />

	<input type="text" name="color" placeholder="اللون" required />
		
    <input type="text" name="dis" placeholder="وصف" required />
		
	<input type="number" min="0" name="price" placeholder="السعر" required />
	
    <select name="type" required >
		<option value="غرفة معيشة">غرفة معيشة</option>
		<option value="غرفة طعام">غرفة طعام</option>
		<option value="غرفة نوم">غرفة نوم</option>
		<option value="مطبخ">مطبخ</option>
		<option value="البلكونة">البلكونة</option>
		</select>
		
        <label>Upload Image File:</label><br /> 
		<input name="image" type="file" class="inputFile" /> 
		<input type="submit" value="اضافة" class="btnSubmit" />
    </form>
</div>
<h1>الطلبات المنتظرة</h1>
 <?php
	while($row=mysqli_fetch_array($tt,MYSQLI_NUM) ) {
	?>
	<div id="col-1">
	<h4>رقم الطلب <?php echo $row[0]; ?> </h4>
  <h4>الاسم <?php echo $row[1]; ?> </h4>
  <h4>مكان السكن <?php echo $row[2]; ?> </h4>
<h4>رقم الهاتف <?php echo $row[3]; ?> </h4>
<h4>رقم المنتج <?php echo $row[4]; ?> </h4>
</div>

<div id="col-2">
<?php
	if($row=mysqli_fetch_array($tt,MYSQLI_NUM)){
	?>
<h4>رقم الطلب <?php echo $row[0]; ?> </h4>
  <h4>الاسم <?php echo $row[1]; ?> </h4>
  <h4>مكان السكن <?php echo $row[2]; ?> </h4>
<h4>رقم الهاتف <?php echo $row[3]; ?> </h4>
<h4>رقم المنتج <?php echo $row[4]; ?> </h4>


</div>
<?php	
	}	
	}
	mysqli_close($conn);
    
?>
</body>
</html>
