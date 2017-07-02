<?php
$a = $_POST['m'];
$b = $_POST['n'];
$c = $_POST['o'];
if($a==""||$b==""||$c=="")
{
	echo "fill all dhakkan";
}
else
{
	mysql_connect("localhost","root","");
	mysql_select_db("lnmiit");
	$query="SELECT * FROM project WHERE name='$a' and password='$b'";
	$result=mysql_query($query);
	$count=mysql_num_rows($result);
	if($count==0)
	{
		echo "does not exist";
	}
	else
	{
		$query1="UPDATE project set password='$c' WHERE name ='$a'";
		mysql_query($query1);
		echo "Database updated";
	}
	
}



?>