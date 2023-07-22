<?php
if (isset($_GET['ok'])) {
    require_once 'menu.php';
    switch ($_GET['ok']) {
            // Table Fournisseur
        case 'addF':
            require_once 'View/fournisseur/add.php';
            break;
        case 'listeF':
            require_once 'Model/db.php';
            require_once 'Model/fournisseur.php';
            $liste = listeFournisseur();
            if (isset($_GET['key'])) {
                $liste = search($_GET['key']);
            }
            require_once 'View/fournisseur/liste.php';
            break;
        case 'editF':
            require_once 'Model/db.php';
            require_once 'Model/fournisseur.php';
            $tab = getFoById($_GET['out']);
            $link = mysqli_fetch_row($tab);
            require_once 'View/fournisseur/edit.php';
            break;
            // Table Contrat
        case 'addC':
            require_once 'View/contrat/add.php';
            break;
    }
} else {
    require_once 'menu.php';
}
