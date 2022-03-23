<?php

require "init.php";


        
		$ss="select * from Asas";
		$tt=mysqli_query($con,$ss);
		
		
 

?>
<HTML>
<HEAD>
<TITLE>Products</TITLE>
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
  <h4><?php echo $row[4]; ?> S.P</h4>
  <h4><?php echo $row[5]; ?>  </h4>
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
  <h4><?php echo $row[4]; ?> S.P </h4>
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