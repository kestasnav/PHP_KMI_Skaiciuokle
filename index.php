<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KMI skaičiuoklė</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,100;1,300&display=swap" rel="stylesheet">
</head>

<body>
    <div class="forma">
        <form id="form" action="kmi.php" method="GET">
            <p>Įveskite savo ūgį centimetrais</p>
            <input type="text" name="ugis" value="" placeholder="Įveskite savo ūgį (cm)"><br>
            <p>Įveskite savo svorį kilogramais</p>
            <input type="text" name="svoris" value="" placeholder="Įveskite savo svorį (kg)"><br>
            <button type="submit">Skaičiuoti KMI</button>

            <span>* KMI - kūno masės indeksas</span>
        </form>
    </div>



</body>

</html>