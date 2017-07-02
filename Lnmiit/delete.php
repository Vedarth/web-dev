<?php
$x=$_GET['a'];

mysql_connect("localhost","root","");
mysql_select_db("Lnmiit");

$query="DELETE from form WHERE name='$x'";
mysql_query($query);

echo "delete ho gaya"
?>