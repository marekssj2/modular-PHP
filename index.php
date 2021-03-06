<?php
  session_start();
   include 'urls.php';
?>

<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>ModularApp</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" media="screen" href="static/style.css" />

      <!-- Bootstrap -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

      <!-- FontAwsome -->
      <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  </head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark mynav" role="navigation" id='navbar'>
          <a class="navbar-brand" href="<?php base()?>">HOME</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <!-- Lista do lewej -->
            <ul class="nav navbar-nav navbar-left">
              <li class="nav-item"><a class="nav-link" href="<?php base()?>albums"><span class="fas fa-headphones mr-2" ></span>Albums</a></li>
            </ul>
            <!-- Lista do prawej -->
            <ul class="nav navbar-nav ml-auto">
              <li class="nav-item"><a href="<?php base()?>register"  class="nav-link"><span class="fas fa-user mr-2" ></span>Register</a></li>
              <li class="nav-item"><a href="<?php base()?>login"  class="nav-link"><span class="fasfa-angle-double-down mr-2" ></span>Login</a></li>
            </ul>
          </div>
        </nav>


        
      
        <div class="container">
            <div class="jumbotron mt-5">
              <?php
                renderBlock($_SESSION['url']);
              ?>
            </div>
        </div>
        
  </body>
</html>