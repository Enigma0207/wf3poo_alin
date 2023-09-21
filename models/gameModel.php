<?php
require_once "database.php";


// class book pour ajouter le
class game{
  public static function add_game($title, $min_players, $max_players){
// se connecter a la bdd
       $db = Database::dbConnect();

    //    prepare la request
    $request = $db->prepare("INSERT INTO game (title, min_players, max_players) VALUES (?,?,?)");
    try {
          $request->execute(array($title, $min_players, $max_players));
        //   header("Location:http://localhost/biblio_poo/views/list_book.php");
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

  }





   public static function listgame(){
    //   se connecter
           $db = Database::dbConnect();
          $request = $db->prepare("SELECT * FROM game");
        //   ECXECUTER
          try {
          $request->execute();
          // recuperer les tablresultateau de la request dans un tableau
          $listgame1 = $request->fetchALL();
        //   return $listBook qui stock les valeur du tableau cad les livre et sera utiliser pour afficher les livres quand on fera apple a la fonction listBook() dans listBook
          return  $listgame1;
        } catch (PDOException $e) {
        echo $e->getMessage();
    }


  }
}