<html>
<head>
<meta charset="utf-8">
<title>Target GOLD</title>
<style type="text/css">
body,td,th {
	color: #FFFFFF;
}
body {
	background-color: #FF0000;
	color: #FFFFFF;
}
</style>
</head>
<body>
<div><h1><center><strong>Welcome to Target GOLD</strong></center></h1></div>
<div><center><h2>Enter Product ID:</h2> 
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET" >
  <div><input name="random-info" type="text" size="25"></div><br>
  <div><h2><font color="#FFFFFF"> Enter Receipt No:</font></h2><br><input name="random-info2" type="text" size="25"></div>
  <input type="submit" value="Submit" >
</form> <br></center> </div>


<div>
<?php
$str=$_GET['random-info'];
$str2=$_GET['random-info2'];
 echo $str2;
 $_not = "Product Not Found";
 
  if($str == '13173300' and $str2 == '111'){
      header("Location: Chobani.php");
      //$handle = fopen("Chobani.php", "r");
      include 'Chobani.php';
  }
  elseif($str == '13391703'  and $str2 == '111'){
      header("Location: Nutella.php");
      include 'Nutella.php';
  }
  elseif($str == '15357108'  and $str2 == '111'){
      header("Location: ProGlide.php");
      include 'ProGlide.php';
  }
  elseif($str == '13331202'  and $str2 == '111'){
      header("Location: OldSpice.php");
      include 'OldSpice.php';
  }
  elseif($str !=''){
      echo '<font color="white"><center><h3>'."INVALID PRODUCT ID/ RECEIPT NUMBER".'</center></h3></font><br>';
  }


?>
</div>
<div><center><a href="target.php"><><img src="Target.png" width="300" height="300" alt=""/></a></center></div>