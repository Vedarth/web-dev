<?php
$x=$_POST['a'];
$y=$_POST['b'];
$z=$_POST['c'];

mysql_connect("localhost","root","");
mysql_select_db("Lnmiit");

$query="INSERT INTO form (name,email,password) VALUES ('$x','$y','$z')";
mysql_query($query);


echo "database ho gaya"
?>