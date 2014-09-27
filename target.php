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
<div><center><h2>Username:</h2> 
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET" >
  <div><input name="random-info" type="text" size="25"></div><br>
  <div><h2><font color="#FFFFFF"> Password:</font></h2><br><input name="random-info2" type="password" size="25"></div>
  <input type="submit" value="Submit" >
</form> <br></center> </div>


<div>
<?php
$str=$_GET['random-info'];
$str2=$_GET['random-info2'];
 echo $str2;
 $_not = "Product Not Found";
 
  if($str == 'somecallustim' and $str2 == 'EXIT'){
      header("Location: user.php");
      //$handle = fopen("Chobani.php", "r");
      include 'Chobani.php';
  }
  
  elseif($str !=''){
      echo '<font color="white"><center><h3>'."INVALID USERNAME/PASSWORD".'</center></h3></font><br>';
  }


?>
</div>
<div><center><img src="Target.png" width="400" height="400" alt=""/></center></div>