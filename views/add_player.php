<?php
include_once "accueil.php";

?>

<div class="container">
    
    <form action="./traitement/action.php" method="post">
        
        <div class="form-group  mb-3">
            <label class="m-2">email :</label>
            <input type="email" class="form-control "  name="email" >
        </div>
        
        <div class="form-group  mb-3">
            <label class="m-2">Nickname</label>
            <input type="text" class="form-control "  name="nickname" >
        </div>
       
 
        <button type="submit" id="bouton" class="btn btn-primary mt-5 mb-5" name="add_player" >Ajouter un film</button>
    </form>
</div>

<?php
include_once "./inc/footer.php";
?>