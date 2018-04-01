<?php
require_once 'db_connect.php';
if($_POST) {

    $tab = $_POST['tables'];
    $sta = $_POST['status'];

    $sql = "INSERT INTO tables ( tables,active) VALUES ('$tab','$sta')";

    if($connect->query($sql) === TRUE) {

        echo "<p>New Record Successfully Created</p>";

        echo "<a href='../create.php'><button type='button'>Back</button></a>";

        echo "<a href='../home.php'><button type='button'>Home</button></a>";

    } else {

        echo "Error " . $sql . ' ' . $connect->connect_error;

    }

 

    $connect->close();

}

 

?>