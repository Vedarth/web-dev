<?php
$a = $_POST['m'];
$b=$_POST['n'];

mysql_connect("localhost","root","");
mysql_select_db("Lnmiit");

$query = "UPDATE form set password = '$b' WHERE name='$a'";
mysql_query($query);
echo "update ho gaya"
?>
