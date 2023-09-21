<?php
include_once "accueil.php";
include_once "./inc/nav.php";
?>

<div class="container">
    <form action="./traitement/action.php" method="post">
        
        <div class="form-group  mb-3">
            <label class="m-2">title :</label>
            <input type="text" class="form-control"  name="title" >
        </div>
        
        <div class="form-group  mb-3">
            <label class="m-2">min_player :</label>
            <input type="number" class="form-control"  name="min_players" >
        </div>
        
        
        <div class="form-group  mb-3">
            <label class="m-2">max player :</label>
            <input type="number" class="form-control"  name="max_players" >
        </div>
          
    
 
        <button type="submit" id="bouton" class="btn btn-primary mt-5 mb-5" name="add_game" >Ajouter un film</button>
    </form>
</div>

<?php
include_once "./inc/footer.php";
?>