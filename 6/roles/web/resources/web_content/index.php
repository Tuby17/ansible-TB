
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
        <p class="lead">
        <?php

if(($_SERVER['HTTP_X_FORWARDED_FOR'] === "127.0.0.1" or $_SERVER['HTTP_X_FORWARDED_FOR'] === "localhost" )){ 
  echo 'flag{n0th1ng_but_4_g00d_t1m3}';
    
}
else{
    echo 'Nincs flag, észlelt ip cím ' . $_SERVER['REMOTE_ADDR'];
}
?>
        </p>
        
      </div>

      <footer class="footer">
        <p>&copy; Mario Font 2016</p>
      </footer>

    </div>

    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
