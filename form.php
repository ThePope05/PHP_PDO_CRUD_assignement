<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="resources/images/PHP-logo-2.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Pdo-crud</title>
</head>
<body>
    <div>
        <div class="container">
            <form action="create.php" method="post">
                <h2>Nieuw persoon toevoegen</h2>
                <input type="text" name="username" placeholder="Gebruikers naam">
                <input type="email" name="email" placeholder="Email">
                <input type="number" name="telefoon" placeholder="Telefoon nummer">
                <input type="text" name="straat" placeholder="Straat naam">
                <input type="text" name="huisnummer" placeholder="Huis nummer">
                <input type="text" name="woonplaats" placeholder="Woonplaats">
                <input type="text" name="postcode" placeholder="Postcode">
                <input type="text" name="landnaam" placeholder="Land naam">
                <button type="submit">Sumbit</button>
            </form>
        </div>
    </div>
</body>
</html>