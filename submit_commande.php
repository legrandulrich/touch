<?php
session_start();

$postData = $_POST;

if (!isset($postData['commande']))
{
	echo('Il faut une commande pour soumettre le formulaire.');
    return;
}	
$output = null;
$result_code = null;
$commande = $postData['commande'];
//$message = $postData['message'];
exec("TouchAm.Payment.Console.exe $commande", $output, $result_code);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borne TouchAm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">

        <h1>Commande bien reçu !</h1>

        <div class="card">

            <div class="card-body">
                <h5 class="card-title">Recapitulatif de votre commande</h5>
                <p class="card-text"><b>Commande</b> : <?php echo($commande); ?></p>
                <p class="card-text"><b>Recapitulatif</b> : <?php var_dump($output);?></p>
                <p class="card-text"><b>Result code</b> : <?php echo $result_code; ?></p>
            </div>
        </div>
    </div>
</body>

</html>