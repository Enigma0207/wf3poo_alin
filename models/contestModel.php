<?php
require_once "database.php";

class contest{

     public static function add_contest($id_game, $start_date)
     {
         
// se connecter a la bdd
       $db = Database::dbConnect();

    //    prepare la request
    $request = $db->prepare("INSERT INTO contest (game_id, start_date) VALUES (?,?)");
    try {
          $request->execute(array($id_game, $start_date));
        //   header("Location:http://localhost/biblio_poo/views/list_book.php");
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

}

public static function listContest(){
    //   se connecter
           $db = Database::dbConnect();
           $request=$db->prepare("SELECT c.*, g.*, p.*, COUNT(cp.player_id) AS nombre_de_joueurs  FROM contest c  LEFT JOIN player p ON c.winner_id = p.id_player  LEFT JOIN game g ON c.game_id = g.id_game  LEFT JOIN player_contest cp ON c.id_contest = cp.contest_id  GROUP BY c.id_contest, g.id_game  ORDER BY c.start_date DESC;");
        //   ECXECUTER
          try {
          $request->execute();
          // recuperer les tablresultateau de la request dans un tableau
          $listContest1 = $request->fetchALL();
        //   return $listBook qui stock les valeur du tableau cad les livre et sera utiliser pour afficher les livres quand on fera apple a la fonction listBook() dans listBook
          return  $listContest1;
        } catch (PDOException $e) {
        echo $e->getMessage();
    }


  }



  public static function findContestById($id) {
        $db = Database::dbConnect();
        // preparer la requete
        $request = $db->prepare("SELECT * FROM contest where id_contest = ?");
        // executer la requete
        try {
            $request->execute([$id]);
            // recuperer le resultat de la requete dans un tableau listPlayer

            $contest = $request->fetchAll();
            return $contest1;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}