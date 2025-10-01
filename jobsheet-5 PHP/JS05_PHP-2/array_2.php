<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Array Asosiatif</title>
    <style>
        table {
            border: 1px solid black;
            border-collapse: collapse;
            margin: 10px 0;
        }
        td {
            border: 1px solid black;
            padding: 5px 10px;
        }
        td:first-child {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h2>Data Dosen</h2>
    <?php
    $Dosen = [
        'Nama' => 'Elok Nur Hamdana',
        'Domisili' => 'Malang',
        'Jenis Kelamin' => 'Perempuan'
    ];
    ?>

    <table>
        <?php
        foreach ($Dosen as $key => $value) {
            echo "<tr>
                    <td>{$key}</td>
                    <td>{$value}</td>
                  </tr>";
        }
        ?>
    </table>
</body>
</html>