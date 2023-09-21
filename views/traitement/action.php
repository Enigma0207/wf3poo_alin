<?php
session_start();
// faire apl a notre fichier userModel
require_once "../../models/playModel.php";
require_once "../../models/gameModel.php";
require_once "../../models/contestModel.php";


if(isset($_POST['add_player'])){
  
    $email = htmlspecialchars($_POST['email']);
    $nickname = htmlspecialchars($_POST['nickname']);

    Player::add_paly($email,$nickname);

    
}





if(isset($_POST['add_game'])){
  
    $title = htmlspecialchars($_POST['title']);
    $min_players = htmlspecialchars($_POST['min_players']);
    $max_players = htmlspecialchars($_POST['max_players']);

    game::add_game($title,$min_players,$max_players);

}



if(isset($_POST['add_contest'])){
  
    $id_game = htmlspecialchars($_POST['game']);
    $start_date = htmlspecialchars($_POST['start_date']);

    contest::add_contest($id_game,$start_date);

    
}