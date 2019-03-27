<?php
/**
 * Created by PhpStorm.
 * User: Yann
 * Date: 27/03/2019
 * Time: 20:41
 */
session_start();
$retour = new stdClass();
$retour-> success = false;
if($_POST['pseudo']=="root" && $_POST['mdp']=="root"){
    $retour ->success = true;
}

header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json');
echo json_encode($retour);
