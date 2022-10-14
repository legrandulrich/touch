<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borne TouchAm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">
    <div class="container">
        <h1>Bienvenue chez TouchAm entrez votre commande</h1>
        <form action="submit_commande.php" method="POST">
            <div class="mb-3">
                <label for="commande" class="form-label">Votre commande ici</label>
                <input type="text" class="form-control" id="commande" name="commande">
                <div id="commande-help" class="form-text">Votre satisfaction est notre priorite.</div>
            </div>

            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
        <br />
    </div>


</body>

</html>