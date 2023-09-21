<?php
require_once "database.php";


// class book pour ajouter le
class Player{
  public static function add_paly($email,$nickname){
// se connecter a la bdd
       $db = Database::dbConnect();

    //    prepare la request
    $request = $db->prepare("INSERT INTO player (email, nickname) VALUES (?,?)");
    try {
          $request->execute(array($email,$nickname));
        //   header("Location:http://localhost/biblio_poo/views/list_book.php");
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

  }


  public static function listplayer(){
    //   se connecter
           $db = Database::dbConnect();
          $request = $db->prepare("SELECT * FROM player");
        //   ECXECUTER
          try {
          $request->execute();
          // recuperer les tablresultateau de la request dans un tableau
          $listPlayer1 = $request->fetchALL();
        //   return $listBook qui stock les valeur du tableau cad les livre et sera utiliser pour afficher les livres quand on fera apple a la fonction listBook() dans listBook
          return  $listPlayer1 ;
        } catch (PDOException $e) {
        echo $e->getMessage();
    }


  }

}