<?php

require_once "../models/contestModel.php";

if (isset($_GET['id_contest'])) {
    // identifiant de l'emprunt
    $id = $_GET['id_contest'];
    // appel de la methode returnBook
    $contest = Contest::findContestById($id);
}

var_dump($contest);