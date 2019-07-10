<?php

include 'database';

//query untuk menampilkan database
$query = "SELECT * FROM data";
//memasukkan query kkedalam variabel
$sql = mysqli_query($database, $query);
//data berupa array
$data = mysqli_fetch_all($sql, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD PHP</title>
</head>

<body>
    <h1>Menampilkan Data</h1>

    //fungsi foreach utk mengambil data array dr variabel $data 
    <?php foreach ($data as $d) : ?>

        <h2><?php echo $d['data1'] ?></h2> //|menampilan
        <h2><?php echo $d['data2'] ?></h2> //|data
        <h2><?php echo $d['data3'] ?></h2> //|array

        <?php echo endforeach; ?>

    </body>

    </html>
