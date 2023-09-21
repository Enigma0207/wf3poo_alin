<?php

// session_start();
// on inclu notre nav dans list_book.php pour recuperer les lien

require_once '../models/playModel.php';
// onfait appl a notre fonction et ca valeur de retour, mais on met ::avant la class pck cest statick
 $listPlayer1 = Player::listplayer();

 require_once '../models/gameModel.php';
// onfait appl a notre fonction et ca valeur de retour, mais on met ::avant la class pck cest statick
 $listgame1 = game::listgame();

require_once "../models/contestModel.php";
$listContest1=contest::listContest();


; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Films</title>
    <!-- Base de donnée : movies_db -->
</head>
<body>

<!-- afficher la liste des player -->
<table>
        <thead>

        </thead>
        <tr>
            <th>id_player</th>
            <th>email</th>
            <th>nickname</th>
           
        </tr>
        <tbody>
            <?php foreach ($listPlayer1 as $play) { ?>
                <tr>
                    <td><?= $play['id_player']; ?></td>
                    <td><?= $play['email']; ?></td>
                    <td><?= $play['nickname']; ?></td>
                 
                   
                    
            <?php }  ?>
               
        </tbody>
    </table>
    
<!-- afficher la liste des game -->

    <table>
        <thead>

        </thead>
        <tr>
            <th>id_game</th>
            <th>title</th>
            <th>min_players</th>
            <th>max_players</th>
           
        </tr>
        <tbody>
            <?php foreach ($listgame1 as $game1) { ?>
                <tr>
                    <td><?= $game1['id_game']; ?></td>
                    <td><?= $game1['title']; ?></td>
                    
                    <td><?= $game1['min_players']; ?></td>
                    <td><?= $game1['max_players']; ?></td>
                 
                   
                    
            <?php }  ?>
               
        </tbody>
    </table>

    <!-- afficher la liste des contests -->

    <table>
        <thead>
            <tr>
                <th>ID CONTEST</th>
                <th>GAME ID</th>
                <th>START DATE</th>
                <th>WINNER ID</th>
                <th>match detail</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
            // definir une variable
            $currentDate = date('Y-m-d');
             foreach ($listContest1 as $contest1){ ?>
               <?php if (strtotime($contest1['start_date']) > strtotime($currentDate)) { ?>
                   <tr class="bg-body-secondary">
                       <td><?= $contest1['id_contest']; ?></td>
                       <td><?= $contest1['game_id']; ?></td>
                       <td><?= $contest1['start_date']; ?></td>
                       <td><?= $contest1['winner_id']; ?></td>
                       <td><a href="./match.php?id_contest=<?= $contest1['id_contest']; ?>">Match Fiche</a></td>
                   </tr>
            <?php } else { ?>
                <tr>
                    <td><?= $contest1['id_contest']; ?></td>
                    <td><?= $contest1['game_id']; ?></td>
                    <td><?= $contest1['start_date']; ?></td>
                    <td><?= $contest1['winner_id']; ?></td>
                </tr>
            <?php } ?>
             
           <?php } ?>
        </tbody>
    </table>

   
