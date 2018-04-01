<?php require_once 'actions/db_connect.php'; ?>

 

<!DOCTYPE html>

<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g=" crossorigin="anonymous"></script>   
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <title>tables</title>

 

    <style type="text/css">

        .manageUser {

            width: 100%;
            margin: auto;
        }

    .parallax {
    /* The image used */
    background-image: url("img/pic5.jpg");

    /* Set a specific height */
    min-height: 600px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
        table {

            width: 100%;
            height: 100%;
            margin-top: 20px;
            color:grey;
            background: url("img/students_learning_platform.png");
        }

        th {
            color:green;
        }

        td {
            color: green;
        }
        tr {
            color: green;
        }

        h1 {
          text-align: center;
          color:green;
          font-size: 30px;
          margin-bottom: 30px;
          margin-top:30px;
        }

        header {
       
        background-size: cover;
        color: green;
        position: relative;
        height: 100%;
        }
        header p {
        color: rgba(255,255,255,0.8);
        font-size: 20px;
        margin-bottom: 80px;
        img {
        width: 100%;
    }
        navbar-header {
        color: green;

        }


    </style>

 

</head>

<body>



 <!-- <!--  <!-- <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">DragonFly Cafe</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <!-- <li><a href="login.php" class="btn btn-lg btn-default">Sign in</a></li> -->
      </ul>
    </div><!-- /.navbar-collapse
  </div><!-- /.container-fluid -->
</nav> 
<div class="parallax">
</div>
 
<div class="container">
<div class="manageUser">

    <header class="text-center" name="home">
  <div class="intro-text">
    <h1>Welcome to <strong>DragonFly Cafe</strong></h1>
    <p>We are a full-service integrated creative agency</p>
    <a href="login.php" class="btn btn-lg btn-success">Sign in</a> </div>
</header>


      <h1>Available Tables </h1>
    <table class="table-striped" cellspacing="0" cellpadding="0">

        <thead>

            <tr>

                <th>Tables Number</th>

                <th>Status</th>

                
            </tr>

        </thead>

        <tbody>



            <?php

            $sql = "SELECT count(active) as Numberoftable FROM tables WHERE active = 'available'";

            $result = $connect->query($sql);

 

            if($result->num_rows > 0) {

                while($row = $result->fetch_assoc()) {

                    echo "<tr>
                        <td>Number of Tables</td>

                         <td>".$row['Numberoftable']."</td>

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

<div id="services-section" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>Our Services</h2>
      <hr>
      <div class="clearfix"></div>
      <p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus. Eleifend pellentesque natoque faucibus magna ut etiam.</p>
    </div>
    <div class="space"></div>
    <div class="row">
      <div class="col-md-3 col-sm-6 service"> <i class="fa fa-desktop"></i>
        <h4>Breakfast</h4>
        <p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque natoque etiam.</p>
      </div>
      <div class="col-md-3 col-sm-6 service"> <i class="fa fa-gears"></i>
        <h4>Lunch</h4>
        <p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque.</p>
      </div>
      <div class="col-md-3 col-sm-6 service"> <i class="fa fa-rocket"></i>
        <h4>Dinner</h4>
        <p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque natoque etiam.</p>
      </div>
      <div class="col-md-3 col-sm-6 service"> <i class="fa fa-line-chart"></i>
        <h4>Event</h4>
        <p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque natoque.</p>
      </div>
    </div>
  </div>
</div>
</body>

</html>

