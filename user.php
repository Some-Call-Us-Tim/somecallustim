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
<div><h1><center><strong>Welcome to Target GOLD</strong></center></h1></div><br><br>
<div><h2><center>Your Target GOLD Balance is :  <?
$old = ("OldSpice.txt");
$nut = ("nutella.txt");
$raz = ("proGlide.txt");
$cho = ("chobani.txt");
$old1 = file($old);
$nut1 = file($nut);
$raz1 = file($raz);
$cho1 = file($cho);
$total = $old1[0]+$cho1[0]+$raz1[0]+$cho1[0];
echo $total;
?> </center></h2></div> 

<div>
<?php
$str=$_GET['random-info'];
$str2=$_GET['random-info2'];
 echo $str2;
 $_not = "Product Not Found";
 
  if($str == 'somecallustim' and $str2 == 'EXIT'){
      header("Location: Chobani.php");
      //$handle = fopen("Chobani.php", "r");
      include 'Chobani.php';
  }
  
  elseif($str !=''){
      echo '<font color="white"><center><h3>'."INVALID USERNAME/PASSWORD".'</center></h3></font><br>';
  }


?>
<br>
<br>
</div>
<br>
<br>
<div><center><img src="Target.png" width="400" height="400" alt=""/></center></div>