<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ivedimas</title>
</head>
<body>
    <div>
        <a href="index.php">Grizti</a>
    </div>
    <form action="ikelti.php" method="get">
        <label for="pavadinimas">Video pavadinimas</label>
        <input type="text" name="pavadinimas" id="pavadinimas" placeholder="html video">
        <br>
        <label for="kodas">Video kodas</label>
        <input type="text" name="kodas" id="kodas" placeholder="UB1O30fR-EE">
        <br>
        <input type="submit" value="Ikelti">
    </form>
</body>
</html>