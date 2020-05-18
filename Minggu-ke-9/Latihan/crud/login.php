<?php
session_start();
require 'connect.php';

if(isset($_COOKIE['id']) && isset($_COOKIE['key']))
{
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    $result = mysqli_query($conn, "SELECT username FROM tb_user WHERE hak = $id");
    $row = mysqli_fetch_assoc($result);

    if($key === hash('sha256', $row['username']))
    {
        $_SESSION['login'] = true;
    }
}


if(isset($_SESSION["login"]))
{
    header("location: index.php");
    exit;
}

if(isset($_POST["login"]))
{
    $username = $_POST["user"];
    $password = $_POST["pass"];

    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE 
    username = '$username' AND password = '$password'");

    if($username != "" || $password != "")
    {
        if(mysqli_num_rows($result) != 0)
        {
            $row = mysqli_fetch_assoc($result);
            
            //set session
            $_SESSION["login"] = true;

            //cek remember me
            if(isset($_POST["remember"]))
            {
                //buat cookie
                setcookie('id', $row['hak'], time()+60);
                setcookie('key', hash('sha256', $row['username']), time()+60);
            }

            header("location: index.php");
            exit;
        }
        else
        {
            $error1 = true;
        }
    }
    else
    {
        $error2 = true;   
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
	<style>
	.login-page {
			width : 360px;
			padding : 13% 0 0;
			margin : auto;
		}
	.form
	{
		width:300px;
		margin:30 auto;
		background:skyblue;
		border:1px solid #222;
		padding:15px;
		border-radius:5px;
		box-shadow:1px 0px 10px 2px;
	}
	.form h1
	{
		text-align:center;
		color:#eee;
	}
	.form input{
		font-family : "Roboto", sans-serif;
			outlie : 0;
			background : #f2f2f2;
			width : 100%;
			border : none;
			border-radius:3px;
			margin : 0 0 15px;
			padding : 15px;
			box-sizing : border-box;
			font-size : 14px;
	}

	.form button {
			font-family : "Roboto", sans-serif;
			text-transform : uppercase;
			outline : 0;
			background : blue;
			width : 100%;
			border : 0;
			padding : 15px;
			color : #ffffff;
			font-size : 15px;
			webkit-transition : all 0.3 ease;
			transition : all 0.3 ease;
			cursor : pointer;
		}
		.form button:hover,.form button:active,.form button:focus {
			background : #43AD47;
		}
	</style>

</head>
<body style="background-color:pink">
	<div class="login-page">
	<div class="form">
		<form action="" method="post" >
			<h1>Halaman Login</h1>

		<?php if(isset($error1)) :  echo "<script>alert('Username / Password Salah! Ulangi Lagi'); window.location='login.php';</script>"; ?>
		<?php endif; ?>
		<?php if(isset($error2)) : echo "<script>alert('Username / Password Harus Diisi !!!'); window.location='login.php';</script>"; ?>
		<?php endif; ?>
		
					<label for="username">Username:</label>
					<input type="text" name="user" id="user" placeholder="Username" required/>
				
					<label for="password">Password:</label>
					<input type="password" name="pass" id="pass" placeholder="Password" required/>

					<label for="remember">Remember me</label>
					<input type="checkbox" name="remember" id="remember">
					
			
					<button type="submit" name="login">Login</button>
		</form>
	</div>
	</div>
</body>
</html>