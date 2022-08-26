<?php 
	session_start();
	if(isset($_SESSION['username']) and isset($_SESSION['email']))
	{
		header('location:welcomepage.php');
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<style type="text/css">
		html{ 
			background-image: url('https://i.postimg.cc/nztGFcMY/cloud2.jpg');
    		background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: cover;
			padding-top: 100px;
		}

		form{
			width: 600px;
			margin: 200px auto;
			background-color: rgba(206, 153, 255, 0.5);
			padding: 30px;
			padding-top: 10px;
			padding-bottom: 70px;
			font-size: 25px;
			margin-top: 0;
			margin-bottom: 0;
		}
		button{
			background: linear-gradient(90deg, #9c33ff, pink);
			padding: 10px;
			border: 0;
			border-radius: 5px;
			width: 100px;
			font-size: 15px;
			letter-spacing: 1px;
			cursor: pointer;
		}
		.hd{
			font-family: Didot, Didot LT STD, Hoefler Text, Garamond, Calisto MT, Times New Roman, serif;
			font-size: 50px;
			text-align: center;
		}
		td{
			padding: 10px;
		}
			
		input{
			padding: 10px;

		}

		.error{
				color:  red;
				font-size: 30px;
				background: rgba(255, 0, 0, 0.1);
				text-align: center;
				padding-right: 5px;
		}
	</style>
</head>
<body>
	<form method="post" name="signin" onsubmit="return validatef()">
	<table>
		<p class="hd" >User Login</p>
		<tr>
			<td><label>Username:</label></td>
			<td><input type="text" name="username" id="username" placeholder="Enter Your Email Id" size="50"></td>
		</tr>
		<tr>
			<td><label>Password:</label></td>
			<td><input type="password" name="password" id="password" placeholder="Enter a Strong Password" size="50"></td>
		</tr>
		
		<tr>
			<td></td>
			<td>
				<button onclick="returnmyFunction()" type="submit" name="register"> LOGIN</button>
				<button type="reset" name="clear"> CLEAR </button></td>
		</tr>

		<p id="errormsg" class="error"></p>
	<script type="text/javascript">
		function validatef()
		{
			var uname= document.getElementById("username").value;
			var passwd= document.getElementById("password").value;
			
			if(uname.length==0)
			{
				document.getElementById("errormsg").innerHTML="Username can not be empty";
				return false;
			}
			
			if(passwd.length==0)
			{
				document.getElementById("errormsg").innerHTML="Password can not be empty";
				return false;
			}
			
		}
	</script>
		
	</table>
	<div class="para"><a href="Welcome.php">>>Home</a></div>
	</form>
	
	<?php
            if(isset($_POST['register'])) {
                $email = $_POST['username'];  
                $sql = "SELECT * FROM `uinfo` WHERE `Email_id`='$email'";

                $conn= mysqli_connect("localhost", "root","","bca30");

                if($conn->connect_errno)
                {
                      die("Error connection database:" . $conn->connect_error);
                }
                else
                {
                $result = $conn->query($sql);
                if( $result->num_rows<1)
                    echo '<script>alert("Username/Email_id not valid")</script>';
                else
                {
                    $row = $result->fetch_assoc();

                    if(strcmp($row['Password'], md5($_POST['password']))!=0)
                    {
                        echo '<script>alert("Password not valid")</script>';
                    }
                    else
                    {
                        $_SESSION['name'] = $row['Name'];
                        $_SESSION['email']= $email;
                        $_SESSION['gender'] = $row['Gender'];
                        $_SESSION['pswd'] = $row['Password'];


                        session_write_close();

                        header('location:welcomepage.php');
                    }
                }
                }
            }
        ?>

</body>
</html>