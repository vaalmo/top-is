<?php

include("dbconnection.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1) {
        $name = trim($_POST['name']);
        $query = "INSERT INTO user(username) VALUES ('$name')";
        $result = mysqli_query($connection,$query);

        if($result) {
            ?>
            <h3>Register succesfull!</h3>
            <?php
        }else{
            ?>
            <h3>Error with register...</h3>
            <?php
        }
    } else {
        ?>
        <h3>Please fill the form with your name</h3>
        <?php
    }
}

?>



