<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MatteSpel</title>
</head>

<body>
    <p>Vad är 1 x 2?</p>
    <form action="index.php" method="get">
        <input type="text" name="svar">
        <input type="submit" name="sub">
    </form>
    <?php

    $facit = array(2, 4, 5, 3, 8, 32);
    if ($_GET["svar"] == $facit[0]) {
        echo "Rätt";
    }

    ?>
    <p>Vad är 2 x 2?</p>
    <form action="index.php" method="get">
        <input type="text" name="svar">
        <input type="submit" name="sub">
    </form>
    <?php

    $facit = array(2, 4, 5, 3, 8, 32);
    if ($_GET["svar"] == $facit[1]) {
        echo "Rätt";
    }

    ?>
    <p>Vad är 3 x 2?</p>
    <form action="index.php" method="get">
        <input type="text" name="svar">
        <input type="submit" name="sub">
    </form>
    <?php

    $facit = array(2, 4, 6, 3, 8, 32);
    if ($_GET["svar"] == $facit[2]) {
        echo "Rätt";
    }
    ?>

</body>

</html>
