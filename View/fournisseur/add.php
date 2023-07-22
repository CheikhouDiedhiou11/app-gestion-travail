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
            <div class="panel-heading">Formulaire d'Ajout Fournisseur</div>
            <div class="panel-body">
                <form method="POST" action="Controler/fcont.php">
                    <div class="form-group">
                        <label class="control-label">Nom</label>
                        <input type="text" name="nom" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Addresse</label>
                        <input type="text" name="adr" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Code</label>
                        <input type="text" name="code" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Ville</label>
                        <input type="text" name="ville" class="form-control">
                    </div>
                    <button name="aj" type="submit" class="btn btn-success">AJOUTER</button>
                    <button name="an" type="reset" class="btn btn-danger">ANNULER</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>