<!DOCTYPE html>
<html>
<head>
    <title>Array dengan Loop</title>
</head>
<body>
    <h2>Array Terindeks dengan Loop</h2>
    <?php
    $Listdosen = ["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha"];

    // for
    echo "<br><b>For Loop:</b><br>";
    for ($i = 0; $i < count($Listdosen); $i++) {
        echo $Listdosen[$i] . "<br>";
    }
    ?>
</body>
</html>
