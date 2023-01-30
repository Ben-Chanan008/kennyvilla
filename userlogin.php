<?php
    include './database.php';

    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $passcode = filter_input(INPUT_POST, 'passcode', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    if(isset($_POST['submit'])) {
        if(!empty($name) && !empty($email) && !empty($passcode)){
            $sql = "INSERT INTO user(`username`, `email`, `password`) VALUES('$name', '$email', '$passcode')";
            mysqli_query($conn, $sql);
            if(mysqli_query($conn, $sql)){
                header('Location: logged_in.php');
            } else{
                echo 'Error' . mysqli_error($conn);
            }
        }
    }
?>