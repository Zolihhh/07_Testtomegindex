<?php
    $testmagassag = $_GET['testmagassag'] ?? 180;
    $testtomeg = $_GET['testtomeg'] ?? 80;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>BMI</h1>

    <form action="" method="get">
        <label for="a">Testmagasság:</label>
        <input type="number" name="testmagassag" id="testmagassag" value="180">

        <label for="b">Testtömeg:</label>
        <input type="number" name="testtomeg" id="testtomeg" value="80">
        
        <button type="submit">BMI Számítása</button>

        <p>
            <?php
            echo "Eredmény: " . ($testtomeg / ($testmagassag/100 * $testmagassag/100));
            $eredmeny = ($testtomeg / ($testmagassag/100 * $testmagassag/100));
            if ($eredmeny < 16) {
                echo " - Kórós alultápláltság";
            } elseif ($eredmeny < 17) {
                echo " - Alultápláltság";
            } elseif ($eredmeny < 18.5) {
                echo " - Enyhe alultápláltság";
            } elseif ($eredmeny < 25) {
                echo " - Normál testsúly";
            } elseif ($eredmeny < 30) {
                echo " - Túlsúly";
            } elseif ($eredmeny < 35) {
                echo " - I. fokú túlsúly";
            } elseif ($eredmeny < 40) {
                echo " - II. fokú túlsúly";
            } elseif ($eredmeny > 40) {
                echo " - III. fokú túlsúly";
            }
            ?>
        </p>


    </form>

</body>

</html>