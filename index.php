<?php

require_once('database.php');

$sql = "SELECT pavadinimas, kodas FROM irasai";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <a href="forma.php">Ikelti nauja video</a>
    </div>
    <h1>puslapis</h1>

    <?php

        if (mysqli_num_rows($result) > 0) {
            while($eilute = mysqli_fetch_assoc($result)) {
                //echo $eilute['pavadinimas'] . "<br>" . $eilute['kodas'] . "<br>";
                ?>
                    <article>
                        <h2><?php echo $eilute['pavadinimas']; ?></h2>
                        <iframe src="https://www.youtube.com/embed/<?php echo $eilute['kodas']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </article>
                <?php
            }
        } else {
            echo "0 rezultatu";
        }

    ?>
</body>
</html>

<?php mysqli_close($conn); ?>