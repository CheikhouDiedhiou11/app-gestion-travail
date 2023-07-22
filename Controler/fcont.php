<?php
require_once '../Model/db.php';
require_once '../Model/fournisseur.php';
// Ajout
if (isset($_POST['aj'])) {
    // $no = $_POST['no'];
    // $ad = $_POST['ad'];
    // $co = $_POST['co'];
    // $vi = $_POST['vi'];
    extract($_POST);
    addFournisseur($nom, $adr, $code, $ville);
    header("location:http://localhost/GesJob/?ok=listeF");
}
// Suppression
if (isset($_GET['out'])) {
    delFo($_GET['out']);
    header("location:http://localhost/GesJob/?ok=listeF");
}
// Modification
if (isset($_POST['mo'])) {
    $ide = $_POST['ide'];
    $no = $_POST['no'];
    $ad = $_POST['ad'];
    $co = $_POST['co'];
    $vi = $_POST['vi'];
    extract($_POST);
    updateFo($ide, $nom, $adr, $code, $ville);
    header("location:http://localhost/GesJob/?ok=listeF");
}
