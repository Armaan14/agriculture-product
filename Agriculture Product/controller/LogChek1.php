<?php 
	session_start();

	if(isset($_REQUEST['submit']))
	{
		$username = $_REQUEST['uname'];
		$password = $_REQUEST['psw'];
	
		if($username != "")
		{
			if($password != "")
			{
				$con = mysqli_connect('localhost','root','','seller');
				$sql = "select * from sell where Name='{$username}' and Password ='{$password}'";
				$result = mysqli_query($con, $sql);    
				$user = mysqli_fetch_assoc($result);
				

				if ($username == $user['Name'] && $password == $user['Password']) 
				{
					setcookie('flag','true',time()+3600, '/');
					header('location: product.php');
				}
				else
				{
					header('location: login.html');
				}
				
			}
			else
			{
				echo "invalid password...";
			}
		}
		else
		{
			echo "invalid username...";
		}
	}

?>