<?php 

require "init.php";
$kind=$_POST["kind"];
$color=$_POST["color"];
$dis=$_POST["dis"];
$price1=$_POST["price"];
$type=$_POST["type"];
$price=(int)$price1;

        $response =array();
		
		
		$ss="select * from Asas where kind='$kind' or color='$color' or dis='$dis' or type='$type' or price='$price'";
		$tt=mysqli_query($con,$ss);
		if(!mysqli_num_rows($tt)>0){
	 echo '<script language="javascript">alert("للاسف لا توجد نتائج لمواصفات البحث المطلوب")</script>';}
		

?>

<HTML>
<HEAD>
<TITLE>Search</TITLE>
<link href="imageStyles.css" rel="stylesheet" type="text/css" />
</HEAD>
<style>
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
#imm {
  border: 1px solid #ddd;
  border-radius: 20px;
  padding: 20px;
  width: 400px;
  height: 200px;
}

</style>
<BODY>
<?php

	while($row=mysqli_fetch_array($tt,MYSQLI_NUM) ) {
	?>
<div id="col-1">
  <form method="post" action="buy.php">
  <img id="imm" src="<?php echo $row[6]; ?>" /><br/>
  <select name="number"  >
		<option value="<?php echo $row[0]; ?> ">رقم المنتج: <?php echo $row[0]; ?></option>
		</select>
  <h4><?php echo $row[1]; ?> </h4>
  <h4><?php echo $row[2]; ?> </h4>
  <h4><?php echo $row[3]; ?> </h4>
  <h4><?php echo $row[4]; ?> </h4>
  <h4><?php echo $row[5]; ?> </h4>
  <input type="submit" value="طلب" />
    </form>
</div>
<div id="col-2">
<?php
if($row=mysqli_fetch_array($tt,MYSQLI_NUM)){
?>
   <form method="post" action="buy.php">
  <img id="imm" src="<?php echo $row[6]; ?>" /><br/>
  <select name="number"  >
		<option value="<?php echo $row[0]; ?> ">رقم المنتج: <?php echo $row[0]; ?></option>
		</select>
   <h4><?php echo $row[1]; ?> </h4>
   <h4><?php echo $row[2]; ?> </h4>
  <h4><?php echo $row[3]; ?> </h4>
  <h4><?php echo $row[4]; ?> </h4>
  <h4><?php echo $row[5]; ?> </h4>
  <input type="submit" value="طلب" />
    </form>
</div>
		
	
<?php	
}
	}	

	mysqli_close($conn);
    
?>
</BODY>
</HTML>