<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Style/style.css">
    <link rel="stylesheet" href="Style/bootstrap-cerulean.min.css">
    <title>Ajout</title>
</head>

<body>
    <div class="container col-md-6 col-md-offset-3 spacer">
        <div class="panel panel-info">
            <div class="panel-heading">Formulaire d'Ajout Contrat</div>
            <div class="panel-body">
                <form method="POST" action="Controler/ccont.php">
                    <div class="form-group">
                        <label class="control-label">Date</label>
                        <input type="text" name="date" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Quantité</label>
                        <input type="text" name="qten" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Signé</label>
                        <input type="text" name="signe" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Fournisseur</label>
                        <select name="ide" class="form-control">
                            <option value="">Faites Votre Choix</option>
                            <?php
                            require_once 'Model/db.php';
                            require_once 'Model/fournisseur.php';
                            $liste = listeFournisseur();
                            while ($tab = mysqli_fetch_row($liste)) {
                                echo "<option value='$tab[0]'>$tab[1]</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <button name="aj" type="submit" class="btn btn-success">AJOUTER</button>
                    <button name="an" type="reset" class="btn btn-danger">ANNULER</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>