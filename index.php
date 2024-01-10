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
    <form action="index.php" method="GET">
        <label for=""></label>
        <input type="text" name="email" id="email">
        <button>Sumbit</button>
    </form>

    <?php
    $email = $_GET['email'];

    if (strpos($email, '@', 1) && strpos($email, '.', 1)) {
        echo $email;
    };

    ?>
</body>

</html>