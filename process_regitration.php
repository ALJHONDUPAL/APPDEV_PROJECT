<?php
    session_start();
    include('conn.php');
    extract($_POST);

    // Execute SQL query to insert data into 'registration' table
    $insert_registration = "INSERT INTO registration (FIRSTNAME, LASTNAME, MIDDLENAME, AGE, GENDER, STUDENT_ID, COURSE, YEAR, EMAIL, PASSWORD) 
                            VALUES ('$FIRSTNAME', '$LASTNAME', '$MIDDLENAME', '$AGE', '$GENDER', '$STUDENT_ID', '$COURSE', '$YEAR', '$EMAIL', '$PASSWORD')";
    mysqli_query($con, $insert_registration);

    // Get the auto-generated user_id
    $user_id = mysqli_insert_id($con);

    // Execute SQL query to insert data into 'login' table
    $insert_login = "INSERT INTO login (user_id, email, password, user_type) 
                     VALUES ('$user_id', '$EMAIL', '$PASSWORD', '2')";
    mysqli_query($con, $insert_login);

    // Set session variable
    $_SESSION['user'] = $user_id;

    // Redirect to index.php or any other page after successful registration
    header('location:index.php');
    exit; // Exit to prevent further execution
?>
