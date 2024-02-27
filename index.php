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