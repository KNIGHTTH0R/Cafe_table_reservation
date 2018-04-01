<?php

 

require_once 'db_connect.php';

 

if($_POST) {

    $tab = $_POST['table'];
    
    $a = $_POST['active'];

 

    $id = $_POST['id'];

 

    $sql = "UPDATE tables SET tables = '$tab', active ='$a' WHERE id = {$id}";

    if($connect->query($sql) === TRUE) {

        echo "<p>Succcessfully Updated</p>";

        echo "<a href='../update.php?id=".$id."'><button type='button'>Back</button></a>";

        echo "<a href='../home.php'><button type='button'>Home</button></a>";

    } else {

        echo "Erorr while updating record : ". $connect->error;

    }

 

    $connect->close();

 

}

 

?>