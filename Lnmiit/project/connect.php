<?php
$a = $_POST['m'];
$b = $_POST['n'];
$c = $_POST['o'];
$d = $_POST['p'];
if($a==""||$b==""||$c==""||$d=="")
{
	echo "fill all dhakkan"; 
	
}
else
{
	mysql_connect("localhost","root","");
	mysql_select_db("lnmiit");
	$query="SELECT * FROM project WHERE name='$a'";
	$result=mysql_query($query);
	$count=mysql_num_rows($result);
	if($count==0)
	{
		$query1="INSERT INTO project(name,email,password,phone) VALUES ('$a','$b','$c','$d')";
		mysql_query($query1);
		echo "database update ho gaya";
		
	}
	else
	{
		echo "already exists";
	}
}



?>