<?php

function addFournisseur($nom, $adr, $code, $ville)
{
    $sql = "INSERT INTO fournisseur VALUES (null,'$nom','$adr','$code','$ville')";
    return executeSQL($sql);
}
function listeFournisseur()
{
    $sql = "SELECT * FROM fournisseur";
    return executeSQL($sql);
}
function delFo($ide)
{
    $sql = "DELETE FROM fournisseur WHERE ide = $ide";
    return executeSQL($sql);
}
function updateFo($ide, $nom, $adr, $code, $ville)
{
    $sql = "UPDATE fournisseur SET nom='$nom', adr='$adr', code='$code', ville='$ville' WHERE ide = $ide";
    return executeSQL($sql);
}
function getFoById($ide)
{
    $sql = "SELECT * FROM fournisseur WHERE ide = $ide";
    return executeSQL($sql);
}
function search($key)
{
    $sql = "SELECT * FROM fournisseur WHERE nom LIKE '%$key%'";
    return executeSQL($sql);
}
