<?php

require_once('database.php');

$pavadinimas = $_GET['pavadinimas'];
$kodas = $_GET['kodas'];

// echo $pavadinimas . "<br>" . $kodas . "<br>";

$sql = "INSERT INTO irasai (pavadinimas, kodas)
        VALUES ('$pavadinimas', '$kodas')";

if (mysqli_query($conn, $sql)) {
    //echo "New record created successfully";
    header('Location: index.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//echo "Connected successfully";

mysqli_close($conn);
