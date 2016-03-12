<?php include('connect.php'); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Hagaman Hazard Assessment</title>

    <link href='https://fonts.googleapis.com/css?family=Paytone+One|Raleway' rel='stylesheet' type='text/css'>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" type="text/css" />

<link rel="stylesheet" href="css/bootstrap-switch.min.css" type="text/css" />
    
    
  </head>
  <body>

  <!-- Begining of Container setup -->
  <div class="container">
    
    <!-- Header Start -->
    <header class="header text-center">
      <h1>Hagaman Vol. Fire Department</h1>
      <h3>126 S. Pawling St. Hagaman NY 12086</h3>
    </header> <!-- /header -->

    <section class="panel panel-danger text-center">
      <div class="panel-heading">
        <h2>Pre-Plan and Target Hazard Assessment</h2>
      </div>
      
      <div class="panel-body">
        <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
        <?php
          //pull in templates for each section from views folder
          include('views/occupancy.php');
          include('views/hazards.php');
          include('views/protections.php');
          include('views/utilities.php');
          include('views/hydrants.php');
          include('views/access.php');
          include('views/contact.php');
          include('views/submit.php');
        ?>
        </form>
      </div> <!-- /panel-body -->
    </section><!-- /panel -->
  </div><!-- /container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
    <script src="js/bootstrap-switch.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>


