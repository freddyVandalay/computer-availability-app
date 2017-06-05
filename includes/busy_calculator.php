
<?php

//Variables

$sql = "SELECT * FROM ComputerStatus";
$result = mysqli_query($link,$sql);
$totComp = mysqli_num_rows($result);
$sql = "SELECT * FROM ComputerStatus WHERE status='logged_in'";
$result = mysqli_query($link,$sql);
$online = mysqli_num_rows($result);

$ratio = $online/$totComp;
//echo mysql_fetch_assoc($sql);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
if($ratio>0.7){

	echo "Busy<br>";
}
else if($ratio>0.3&&$ratio<0.7){
	echo "Average<br>";
}
else{
	echo "CHILL<br>";
}
