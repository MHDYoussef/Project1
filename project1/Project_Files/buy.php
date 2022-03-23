<?php

require "init.php";
$kind=$_POST["number"];
        
		$ss="select * from Asas where Idd=$kind";
		$tt=mysqli_query($con,$ss);
		$row=mysqli_fetch_array($tt,MYSQLI_NUM);
		
mysqli_close($con);
?>
<HTML>
<!DOCTYPE html>
<html>
<title>Buy</title>
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
<h1> شكرا لاختيارك منتجاتنا</h1>
<h2>لقد اخترت المنتج رقم <?php echo $kind; ?></h2>
<div id="col-1"><img id="imm" src="<?php echo $row[6]; ?>" /><br/></div>
<div id="col-2"><h2>الرجاء ادخال المعلومات الشخصية لايصال الطلب</h2>

<form method="post" action="register.php">
	<input type="text" name="name" placeholder="الاسم"  /><br/>

	<input type="text" name="address" placeholder="مكان السكن"  /><br/>
		
    <input type="text" name="phone" placeholder="رقم الهاتف"  /><br/>
	<select name="number"  >
		<option value="<?php echo $kind; ?> "></option>
		</select>

	<input type="submit" value="تاكيد الارسال" />
    </form>

</div>

</BODY>
</HTML>