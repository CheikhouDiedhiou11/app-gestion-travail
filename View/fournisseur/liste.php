<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Style/style.css">
    <link rel="stylesheet" href="Style/bootstrap-cerulean.min.css">
    <title>Ajout</title>
    <script src="Script/script.js"></script>
</head>

<body>
    <form style="margin-left: 900px; margin-top: 10px;" action="?ok=listeF" method="GET">
        <input type="hidden" name="ok" value="listeF" id="">
        <input style="border-radius: 20px;" type="text" name="key" id="">
        <button type="submit" class="btn btn-primary">RECHERCHER</button>
    </form>
    <div class="container col-md-6 col-md-offset-3 spacer">
        <div class="panel panel-info">
            <div class="panel-heading">Formulaire d'Ajout Fournisseur</div>
            <div class="panel-body">
                <table class="table table-hover table-condensed">
                    <tr>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Adresse</th>
                        <th>Code</th>
                        <th>Ville</th>
                        <th>Action 1</th>
                        <th>Action 2</th>
                    </tr>
                    <?php
                    // require_once 'Model/fournisseur.php';
                    while ($tab = mysqli_fetch_row($liste)) {
                        echo "<tr>";
                        for ($i = 0; $i < count($tab); $i++) {
                            echo "<td>" . $tab[$i] . "</td>";
                        }
                        echo "<td><a onclick='return confirmation();' class='btn btn-danger' href='Controler/fcont.php?out=$tab[0]'>Supprimer</a></td>
                              <td><a class='btn btn-warning' href='?ok=editF&out=$tab[0]'>Modifier</a></td>";
                        echo "</tr>";
                    }
                    ?>

                </table>
            </div>
        </div>
    </div>
</body>

</html>