<?php
$a = $_POST['m'];
$b = $_POST['n'];
$c = $_POST['o'];
if($a==""||$b==""||$c=="")
{
	echo "fill all";
}
else
{
	mysql_connect("localhost","root","");
	mysql_select_db("lnmiit");
	$query="SELECT * FROM student WHERE name='$a'";
	$result=mysql_query($query);
	$count=mysql_num_rows($result);
	if($count==0)
	{
		$query1="INSERT INTO student(name, email, password) VALUES ('$a','$b','$c')";
		mysql_query($query1);
		echo "database update ho gaya";
	}
	else
	{
		echo "already exists";
	}
	
}

?>