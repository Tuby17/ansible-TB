<?php

  session_start();

  if($_SESSION['Active'] == false){
    header("location:login.php");
	  exit;
  }
?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
    <title>Logged in</title>
  </head>
  <body>
    <div class="container">

      <div class="jumbotron">
        <h1>Status: logged in</h1>
        <p class="lead">flag{n4gyonugy3sgr4tul4l0k!}</p>
        <p><a class="btn btn-lg btn-success" href="logout.php" role="button">Log out</a></p>
      </div>

      <footer class="footer">
        <p>&copy; Mario Font 2016</p>
      </footer>

    </div>

    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
