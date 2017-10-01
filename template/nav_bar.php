
<?php
  $log= '<li><a  data-toggle="modal" data-target="#connexion" href="#">Login</a></li>';
  $admin_dashboard_nav='';
  $ajout_article_nav='';

  if(!empty($_SESSION['identifier'])){

    $log= '<li id="disconnect"><a href="?p=disconnect">disconnect</a></li>';

  }
?>

                                  <!-- Navbar sit web -->

<nav class="navbar navbar-inverse bg-faded navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand">Logo</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="?p=home">Home</a></li>
    </ul>
    
                <!-- partie affichage utilisateur -->
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-right" >
      <li><a href="?#About">A propos de nous</a></li>
    
      <?= $log ?>
    
    </ul>

  </div>
</nav>