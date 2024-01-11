<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Iscrizione Newsletter</title>

    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <div class="d-flex align-items-center justify-content-center vh-100">
        <div class="card" style="width: 30rem;">
            <img src="https://www.sendx.io/hubfs/SendPost_August2021/images/What-is-s-Newsletter-Definition-Examples-and-Design-Ideas.png" class="card-img-top" alt="...">
            <div class="card-body">

                <h5 class="card-title">Grazie!</h5>
                <p class="card-text">Iscrizione effettuata. <br> Ti manderemo la conferma nell'email: </p>
                <p class="card-text"><?php echo $_SESSION['email'] ?></p>





            </div>
        </div>
    </div>

</body>

</html>