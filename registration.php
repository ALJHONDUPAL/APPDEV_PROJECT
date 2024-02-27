<?php include('conn.php'); ?>
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
<!DOCTYPE html>
<html>
<head>
    <title>Event Snap Registration System - Registration</title>
    <style>
    body {
        background-color: lightseagreen;
        font-family: Arial, sans-serif;
        display: flex;
        height: 100vh;
        justify-content: center;
        align-items: center;
        padding: 10px;
    }
    .well {
            text-align: center;
        }
    .logo {
        display: block;
        margin: 0 auto;
        max-width: 200px;
        height: auto;
        margin-bottom: 20px;
    }
    .container{
        max-width: 700px;
        width: 100%;
        background: darkblue;
        padding: 25px 30px;
        border-radius: 5px; 
    }
    .container .title{
        font-size: 25px;
        font-weight: 500;
        position: relative;
    }
    .container .title::before{
        container: '';
        position: absolute;
        left: 0;
        bottom: 0;
        height: 3px;
        width: 30px;
        background: #9b59b6;

    }
  
    #wrap {
  border: 1px dotted black;
  padding: 1.5em;
  width: 30em;
}

#left-div {
  display: inline-block;
  padding: 0.5em;
  border: 1px dotted black;
}

#left-div input {
  width: 2em;
  margin: 0.5em;
}

#left-div label {
  margin: 0.5em 0em 0.5em 0em;
  display: inline-block;
}



    .button {
            text-align: center;
        }
        .button input[type="submit"] {
            background-color: #337ab7;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .button input[type="submit"]:hover {
            background-color: #286090;
        }
</style>
</head>
<body>
<div class="container">
        <img src="images/logo.jpg" alt="Logo" class="logo">
        <div class="well">
            <h2> Event Snap Registration System</h2>
            <hr>
            <form method="POST" action="process_registration.php">
            <div class="content">
    <div class="wrap">
        <div class="content-top" style="min-height:300px;padding:50px">
                    <div class="panel-heading">Register</div>
                    <div class="panel-body">
                        <form action="#" method= "post" id="form1">
                            <div class="user-details">
                           
                            <div class="left-div">
                            <div class="input-box">
                                <span class="details">LAST NAME</span>
                                <input type="text" placeholder="Input your Last name" required>
                            </div>
                            <br>
                            <div class="input-box">
                                <span class="details">FIRST NAME</span>
                                <input type="text" placeholder="Input your First name" required>
                            </div> 
                            <br>                           
                            <div class="input-box">
                                <span class="details">MIDDLE NAME</span>
                                <input type="text" placeholder="Input your Middle name" required>
                            </div>
                            <div class="input-box">
                                <span class="details">AGE</span>
                                <input type="age" placeholder="Enter your age" required>
                            </div>
                            <div class="input-box-right">
                                <span class="details">GENDER</span>
                                <input type="text" placeholder="Enter your GENDER" required>
                            </div>
                            </div>
                            <div class="right-div">
                            <div class="input-box">
                                <span class="details">STUDENT ID NUMBER</span>
                                <input type="text" placeholder="Enter your DOMAIN NUMBER" required>
                            </div>
                            <br>
                            <div class="input-box">
                                <span class="details">COURSE</span>
                                <input type="text" placeholder="Enter your COURSE" required>
                            </div>
                            <br>
                            <div class="input-box">
                                <span class="details">YEAR</span>
                                <input type="text" placeholder="Enter your Year level" required>
                            </div>
                            <br>
                            <div class="input-box">
                                <span class="details">EMAIL</span>
                                <input type="text" placeholder="Enter your Email" required>
                            </div>
                            <br>
                            <div class="input-box">
                                <span class="details">PASSWORD</span>
                                <input type="text" placeholder="Enter your PASSWORD" required>
                            </div>
                            </div>
                            </div>
                            <br>
                            <div class = "button">
                                <input type="submit" value="Register">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
            </form>
            <div class="error-message">
                <?php
                    if(isset($_SESSION['msg'])){
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>