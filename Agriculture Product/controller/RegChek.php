<?php 
	session_start();

	if(isset($_REQUEST['submit']))
	{
		$name = $_REQUEST['name'];
		$password = $_REQUEST['psw'];
		$email= $_REQUEST['email'];
		$conpass=$_REQUEST['psw-repeat'];
		

		if($name != "")
		{
			if($password != "" and $conpass==$password)
			{
					if ($email!= "") 
					{
						$con = mysqli_connect('localhost','root','','seller');
						$sql = "insert into sell (Name, Email, Password ) values ('{$name}','{$email}','{$password}')";
						
						$result = mysqli_query($con, $sql);
						header('location: login.html');
						mysqli_close($con);
					}
					else
					{
						echo "Invalid email";
					}
				}
			else
			{
				echo "invalid password...<Br> or confirm password doesnot matched....";
			}
		}
		else
			{
				echo "invalid username...";
			}
	}
?>