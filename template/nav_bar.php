
<?php
  $log= '<li><a  data-toggle="modal" data-target="#connexion" href="#">Login</a></li>';
  $admin_dashboard_nav='';
  $ajout_article_nav='';

  if(!empty($_SESSION['identifier'])){

    $log= '<li id="disconnect"><a href="?p=disconnect">disconnect</a></li>';

  }
?>

                                  <!-- Navbar sit web -->

<nav class="navbar navbar-inverse bg-faded">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand">Mon super site</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="?p=home">Home</a></li>

    </ul>

                <!-- partie affichage utilisateur -->

    <ul class="nav navbar-nav navbar-right" >
    
      <?= $log ?>
    
    </ul>

  </div>
</nav>