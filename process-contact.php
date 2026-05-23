<?php

include 'db.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    $sql = "INSERT INTO messages(name, email, message)
            VALUES('$name', '$email', '$message')";

    if(mysqli_query($conn, $sql)){

        echo "<script>
                alert('Message Sent Successfully');
                window.location.href='index.php';
              </script>";

    }else{

        echo "Error: " . mysqli_error($conn);
    }

}

?>
