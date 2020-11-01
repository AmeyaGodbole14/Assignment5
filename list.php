<?php
include_once 'connection.php';
//include_once 'modified.php';


if(isset($_POST['save']))
{    $id = $_POST['id'];
     $fname = $_POST['fname'];
     $mname = $_POST['mname'];
     $lname = $_POST['lname'];
     $phone = $_POST['phone']
     $email = $_POST['email'];
     $sql = "INSERT INTO regis (id,fname,mname,lname,email)
     VALUES ('$id','$fname','$mname','$lname','$phone','$email')";
     if (mysqli_query($conn, $sql)) {

        echo "<script> location.href='modifu.php'; </script>";
        exit;
    }
    else {
        echo "Error: " . $sql . " " . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>
