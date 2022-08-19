<?php
  $title='Jeu';
  require 'header.php';
?>

<div class="container">
  <h1>Jeu</h1>
  
  <?php

    require 'traitement_jeu.php'    ;

  ?>

  <form action="./jeu.php" method='GET' class="row g-3">

  <div class="col-auto">
      <input type="number" name="p" placeholder='Entre 0 et 1000' class="form-control">
    </div>
      
    <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-3">Devinez</button>
    </div>
    
  </form>

</div>

<?php require 'footer.php' ?>