<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <title>Skills & Sofa</title>
</head>
<body>  
    <header>
        <?php include("nav_bar.php");?>
    </header>

    <?php
        if(!isset($_SESSION['identifier']) && empty($_SESSION['identifier'])){
    ?>

    <div class="container">
        <?php include("modal_haut.php") ?>
        <form class="form-group" method="post" action=''>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
                    <label for="login">Login</label>
                    <input class="form-control" id="login" type="text" name="login">
                    <label for="password">Password</label>
                    <input class="form-control" id="password" type="password" name="password">

                </div>
            </div>
            <?php include("modal_bas.php") ?>    
        </form>
    
    <?php 
        }; 
    ?>
    </div>

    <div class="container">

        <?php
            include("modal_utilisateur_haut.php");
        ?>

        <?php
            include("modal_utilisateur_bas.php");
        ?>

    </div>

    <div class="container">

        <?= $content ?>
    </div>

    <div class="container well">
	<h2><center>courrier@aude.fr</center></h2>
</div>
<div id="footer">
    <div class="container">
        <div class="row">
            <h3 class="footertext">About Us:</h3>
            <br>
              <div class="col-md-4">
                <center>
                  <img src="http://i39.tinypic.com/119lz43.jpg" class="img-circle" alt="the-brains">
                  <br>
                  <h4 class="footertext">Coworker</h4>
                  <p class="footertext">Et si vous pensiez à travailler tout en vous ressourcant ?<br>
                </center>
              </div>
              <div class="col-md-4">
                <center>
                  <img src="http://oi60.tinypic.com/2z7enpc.jpg" class="img-circle" alt="...">
                  <br>
                  <h4 class="footertext">Artist</h4>
                  <p class="footertext">All the images here are hand drawn by this man.<br>
                </center>
              </div>
              <div class="col-md-4">
                <center>
                  <img src="http://oi61.tinypic.com/307n6ux.jpg" class="img-circle" alt="...">
                  <br>
                  <h4 class="footertext">Designer</h4>
                  <p class="footertext">This pretty site and the copy it holds are all thanks to this guy.<br>
                </center>
              </div>
            </div>
            <div class="row">
            <p><center><a href="#">Contact</a> <p class="footertext">Copyright&copy HVA 2017</p></center></p>
        </div>
    </div>
</div>

    <script src="node_modules/jquery/dist/jquery.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js" ></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    <script src="js/app.js"></script>
    


</body>
</html>