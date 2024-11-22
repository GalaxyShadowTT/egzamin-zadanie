<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wycieczki</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2 style="text-align: center;">Wycieczki<h2>
        <table>
            <thead>
                <tr>
                    <th>Data Wyjazdu</th>
                    <th>Cel</th>
                    <th>Cena</th>
                </tr>
            </thead>
            <tbody>
                <?php include 'select.php'; ?>
            </tbody>
        </table>
</body>
</html>
