<?php
include_once "accueil.php";
require_once "../models/gameModel.php";

// faire apl a notre $listgame1 qui stock la liste de game
 $listgame1 = game:: listgame();
?>
<!-- cfrt hotel -->
<div class="container mt-5">


    <form action="./traitement/action.php" method="post" enctype="multipart/form-data">    

        <div class="form-group">
          <label>game :</label>
          <!-- on veut afficher la list des hotels ou on va ajouter les room  -->
          <select name="game" class="form-control" >
              <option value="">Choose game</option>
              <!-- avk foreach, recupere moi la id_age et titre de game pour marier un game avk une date pour faire le match -->
              <?php ; foreach($listgame1 as $game) {?>
                <option value="<?= $game ['id_game'] ?>"><?= $game['title'] ?></option>
              <?php } ?>

          </select>
        </div>
        <div class="form-group  mb-3">
            <label class="m-2">start_date</label>
            <input type="date" class="form-control text-uppercase"  name="start_date" >
        </div>
         <button type="submit" id="bouton" class="btn btn-primary mt-5 mb-5" name="add_contest" value="submit">Submit</button>
   </form>


<?php
include_once "./inc/footer.php";
?>