<?php
    if ( isset( $_POST["email"]) || isset($_POST["password"]) ){
        $email = $_POST ["email"];
        $password = $_POST ["password"];
        if ($email == "admin123@admin.com" && $password == "admin"){
            header("location: ./../dashboard.php");
        } else {
            echo"GMAIL / PASWORD SALAH BROOO";
        }
     }

?>