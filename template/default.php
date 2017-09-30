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

            <div class="container">
            
                <div class="row">
                
                    <div class="col-md-3">
                    
                        <img src="images/profil_nature.jpg" alt="image_de_profil" width="320px" height="auto" class="image_profil">
                    
                    </div>

                    <div class="col-md-3">
                    
                    <ul>

                        <li>Nom : Leblanc</li>
                        <li>Prenom : Sylvie</li>
                        <li>métier : Dévellopeuse Web</li>
                        <li>Mail : Sylv.dev@mail.com</li>
                        <li>Tel : +33 6 95 14 75 33</li>
                        <li>Région : Aude (11)</li>
                        <li>adresse : 13 Rue de l'Hermitte</li>
                        <li>Ville : Quillan</li>

                    </ul>
                    
                    </div>
                
                </div>

                <div class="row">
                
                    <div class="col-md-6">
                    
                        <h3>Description</h3>

                        <div class="panel panel-default">

                            <div class="panel-body">A Basic Panel</div>

                        </div>
                                        
                    </div>
                
                </div>
            
            </div>

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
                  <img src="img/coworker.jpg" class="img-circle" alt="coworker">
                  <br>
                  <h4 class="footertext">Coworker</h4>
                  <p class="footertext">Et si vous pensiez à travailler autrement ?<br>
                </center>
              </div>
              <div class="col-md-4">
                <center>
                  <img src="img/skills.jpg" class="img-circle" alt="compétences">
                  <br>
                  <h4 class="footertext">Skills</h4>
                  <p class="footertext">Venez partager vos compétences.<br>
                </center>
              </div>
              <div class="col-md-4">
                <center>
                  <img src="img/sofa.jpg" class="img-circle" alt="...">
                  <br>
                  <h4 class="footertext">Sofa</h4>
                  <p class="footertext">Venez vous ressourcer chez d'autres coworker.<br>
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