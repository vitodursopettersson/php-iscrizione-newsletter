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
                <form action="index.php" method="GET">
                    <h5 class="card-title">Iscriviti alla newsletter</h5>
                    <p class="card-text">Non ti preoccupare, ti manderemo massimo 10 email al giorno, o forse 20.</p>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="text" class="form-control" id="email" name="email">
                        <div id="emailHelp" class="form-text">Venderemo la tua email a chiunque.</div>

                        <?php
                        include 'functions.php'
                        ?>

                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Accetta o no, tanto lo faremo comunque</label>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 py-2 mt-2">Inizia lo spam</button>
                </form>
            </div>
        </div>
    </div>


</body>

</html>