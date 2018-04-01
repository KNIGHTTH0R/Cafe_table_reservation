<?php require_once 'actions/db_connect.php';

?>
 <?php
 ob_start();
 session_start();
 require_once 'db_connect.php';

 // if session is not set this will redirect to login page
 if( !isset($_SESSION['user']) ) {
  header("Location: home2.php");
  exit;
 }
 // select logged-in users detail
 $res=mysqli_query($conn, "SELECT * FROM users WHERE userId=".$_SESSION['user']);
 $userRow=mysqli_fetch_array($res, MYSQLI_ASSOC);
 ?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script
  src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
  integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g="
  crossorigin="anonymous"></script>   
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>DragonFly Cafe</title>

    <style type="text/css">
        .manageUser {
            width: 50%;
            margin: auto;
        }

        table {
            width: 100%;
            margin-top: 20px;
        }

    </style>

</head>
<body>

     <style type="text/css">

        .manageUser {

            width: 100%;
            margin: auto;
        }

        body {

             background: url("img/pic4.jpg");
             background-repeat: no-repeat, repeat;
             background-size: cover;
            
            
        }

        table {

            width: 100%;
            margin-top: 20px;
            color:green;
            background-color: rgba(000,000,000, 0.2);

           
        }

        td {

            padding: 10px;
        }

        h1 {
            text-align: center;
            color:green;
            font-size: 30px;
            margin-bottom: 30px;
            margin-top:30px;
        }
        img {
            width: 100%;
        }

    </style>

 

</head>

<body>

<div class="manageUser">

    <a href="create.php"><button type="button">Add Table</button></a>

        <h1> AVAILABLE </h1>
        <div class="container">
    <table class="table-hover" border="1">

        <thead>

            <tr>

                <th><center><h3>Table</h3></center></th>

                <th><center><h3>Active</h3></center></th>

                <th><center><h3>Option</h3></center></th>


            </tr>

        </thead>

        <tbody>


            <?php

            $sql = "SELECT * FROM tables WHERE active = 'available'";

            $result = $connect->query($sql);

            if($result->num_rows > 0) {

                while($row = $result->fetch_assoc()) {

                    echo "<tr>

                        <td>".$row['tables']." 

                        <td>".$row['active']."</td>

                        <td>

                            <a href='update.php?id=".$row['id']."'><button class='btn btn-success' type='button'>Edit</button></a>

                            <a href='delete.php?id=".$row['id']."'><button class='btn btn-danger' type='button'>Delete</button></a>

                        </td>

                    </tr>";

                }

            } else {

                echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";

            }

            ?>


             

        </tbody>

    </table>


    <h1> RESERVED </h1>
    <table class="table-hover" border="1" cellspacing="0" cellpadding="0">

        <thead>

            <tr>

                <th><h3><center>Tables</center></h3></th>

                <th><h3><center>Active</center></h3></th>

                <th><h3><center>Option</center></h3></th>

            </tr>

        </thead>

        <tbody>


            <?php

            $sql = "SELECT * FROM tables WHERE active = 'reserved'";

            $result = $connect->query($sql);

 
            if($result->num_rows > 0) {

                while($row = $result->fetch_assoc()) {

                    echo "<tr>

                        <td>".$row['tables']." 
                        
                        <td>".$row['active']."</td>

                        <td>

                            <a href='update.php?id=".$row['id']."'><button class='btn btn-success'type='button'>Edit</button></a>

                            <a href='delete.php?id=".$row['id']."'><button class='btn btn-danger'type='button'>Delete</button></a>

                        </td>

                    </tr>";

                }

            } else {

                echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";

            }

            ?>


             

        </tbody>

    </table>
</div>
</div>

 
 <a href="logout.php?logout">Sign Out</a>
</body>
</html>