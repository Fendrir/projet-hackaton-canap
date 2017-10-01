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
<body data-spy="scroll" data-target=".navbar" data-offset="50">  
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

            <div class="container-fluid">
            
                <div class="row">
                
                    <div class="col-md-5">
                    
                        <img src="images/profil_nature-recadre.jpg" alt="image_de_profil" class="image_profil">
                    
                    </div>

                    <div class="col-md-7 position-profil">
                    
                        <ul>

                            <li><b>Nom :</b> Leblanc</li>
                            <li><b>Prenom :</b> Sylvie</li>
                            <li><b>Métier :</b> Développeuse Web</li>
                            <li><b>Mail :</b> Sylv.dev@mail.com</li>
                            <li><b>Tel :</b> +33 6 95 14 75 33</li>
                            <li><b>Région :</b> Aude (11)</li>
                            <li><b>Adresse :</b> 13 Rue de l'Hermitte</li>
                            <li><b>Ville :</b> Quillan</li>

                        </ul>
                    
                    </div>
                
                </div>

            </div>

            <div class="container-fluid">

                <div class="row">
                
                    <div class="col-md-10 col-md-offset-1">
                    
                        <h3>Description</h3>

                        <div class="panel panel-default">

                            <div class="panel-body">Un petit coin de paradis avec plusieurs attractions, VTT, chemins de randonnées et un air pur parfait pour ce ressourcer. </br>
                            Venez dans cet espace de Co-working vous êtes le bienvenu !
                            </div>

                        </div>
                                        
                    </div>
                
                </div>

                <div class="row">

                    <div class="col-md-6 col-md-offset-3">

                        <div class="panel panel-success">

                            <div class="panel-heading"><b>Réservation disponible</b><label for="date"></label></div>

                            <div class="panel-body">Vous pouvez réserver :<input class="form-control" type="date" name="date" id="date"></div>

                        </div>

                    </div>

                    <!-- <div class="form-group col-md-4 col-md-offset-1 disponible">
                            
                            

                        <label for="date">date</label>
        
                        <input class="form-control" type="date" name="date" id="date">

                    </div> -->

                </div>

            </div>

            <div class="container-fluid">

                <div class="row">
                
                    <div class="col-md-6 div_photo">

                        <img src="images/bureau.jpg" alt="image-co-working" class="bureau img-thumbnail text-center">
                    
                    </div>

                    <div class="col-md-6 div_photo">

                        <img src="images/campagne.jpg" alt="campagne-co-working" class="campagne img-thumbnail">
                    
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

    <div class="container">
        <?php include('footer.php');?>
    </div>

    <script src="node_modules/jquery/dist/jquery.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js" ></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    <script src="js/app.js"></script>
    


</body>
</html>