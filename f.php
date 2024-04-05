<?php

    include('connect.php');
    
    $pass = $_POST['pas'];
    $u_name = $_POST['name'];
    
    // Escape user input to prevent SQL injection
    $u_name = mysqli_real_escape_string($con, $u_name);
    
    $query = "SELECT * FROM members WHERE Name='$u_name'";
    $result = mysqli_query($con, $query);

        $data = mysqli_fetch_assoc($result);

            $storedHashedPassword = $data['Password'];
            
            if (password_verify($pass, $storedHashedPassword)) {
                echo 'Password is correct.';
            } else {
                echo 'Invalid password.';
            }
       


?>