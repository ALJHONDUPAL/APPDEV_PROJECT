<?php include('conn.php'); ?>
<?php include('header.php'); ?>
<?php
	session_start();
	
	if (isset($_SESSION['id'])){
		$query=mysqli_query($conn,"select * from user where userid='".$_SESSION['id']."'");
		$row=mysqli_fetch_array($query);
		
		if ($row['access']==1){
			header('location:admin/');
		}
		else{
			header('location:user/');
		}
	}
?>
    <title>Event Snap Registration System</title>
    <style>
        body {
            background-color: lightblue;
        }
        #login_form {
            margin-top: 50px;
            width: 400px;
            margin-left: auto;
            margin-right: auto;
        }
        .well {
            background-color: #f5f5f5;
            border: 1px solid #e3e3e3;
            border-radius: 4px;
            padding: 20px;
        }
        .form-control {
            width: 100%;
            height: 34px;
            padding: 6px 12px;
            font-size: 14px;
            line-height: 1.42857143;
            color: #555;
            background-color: #fff;
            background-image: none;
            border: 1px solid #ccc;
            border-radius: 4px;
            -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
            box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
            -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
            -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
        }
        .btn-primary {
            color: #fff;
            background-color: #337ab7;
            border-color: #2e6da4;
            display: inline-block;
            padding: 6px 12px;
            margin-bottom: 0;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.42857143;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -ms-touch-action: manipulation;
            touch-action: manipulation;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-image: none;
            border: 1px solid transparent;
            border-radius: 4px;
        }
        .btn-primary:hover {
            color: #fff;
            background-color: #286090;
            border-color: #204d74;
        }
        .logo {
            width: 200px; /* Adjust the width as needed */
            height: auto; /* Maintain aspect ratio */
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 20px;
        }
    </style>
<body style="background-color: lightblue;">
<div class="container">
<img src="images/logo.jpg" alt="Logo" class="logo">
	<div id="login_form" class="well">
    <h2><center><span class="glyphicon glyphicon-lock"></span> Event Snap Registration System</center></h2>
        <hr>
		<form method="POST" action="login.php">
		Username: <input type="text" name="username" class="form-control" required>
		<div style="height: 15px;"></div>		
		Password: <input type="password" name="password" class="form-control" required> 
		<div style="height: 20px;"></div>
		<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-log-in"></span> Login</button>
		<p class="login-box-msg" style="padding-top:20px">Not yet registered? <a href="registration.php">sign up</a></p>
    </form>
		<div style="height: 25px;"></div>
		<div style="color: red; font-size: 15px;">
			<center>
			<?php
				
				if(isset($_SESSION['msg'])){
					echo $_SESSION['msg'];
					unset($_SESSION['msg']);
				}
			?>
			</center>
		</div>
	</div>
</div>
<?php include('script.php'); ?>
</body>
</html>