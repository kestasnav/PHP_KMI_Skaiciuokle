<?php

/**
 * 
 */
// $_GET['1']
$ugis = $_GET['ugis'];
$svoris = $_GET['svoris'];
$ugisCM = $ugis / 100;
$KMI = $svoris / ($ugisCM * $ugisCM);
$idealusSvoris = ($ugis - 100) - ($ugis - 150) / 4;


if ($KMI < "18.5") {
     $msg = 'Jums reiktų pavalgyti';
    
} else if ($KMI > "18.5" && $KMI < 25) {
     $msg = 'Jūs gyvenate labai sveikai';
   
} else if ($KMI > "25" && $KMI < 30) {
   $msg = 'Jums reiktų nustoti lankytis McDonalde';
   
} else if ($KMI > 30) {
     $msg = 'KREIPKIS Į DAKTARUS IR NUSTOK ĖSTI!!!';
    
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KMI Skaičiuoklė</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,100&display=swap" rel="stylesheet">
</head>

<body>

    <div>
        <p class="p">
            Jūsų kūno masės indeksas yra :
            <?php echo round($KMI, 2);  ?>
        </p>

        <p class="msg">
            <?php echo $msg;
            ?>
        </p>
        <p class="idealus">Idealus svoris pagal Jūsų pateiktą ūgį būtų : <?php echo $idealusSvoris; ?>kg.</p>
        <br> <a href="index.php">Grįžti į KMI skaičiuoklę</a>
    </div>
</body>

</html>