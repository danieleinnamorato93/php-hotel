<?php 
$hotels = [
    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4,
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2,
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1,
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5,
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50,
    ],
];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>


<body>

    <main>
        <!--  <section class="container mb-5">
            <ul>
                <?php foreach ($hotels as $hotel) {?>
                <li>
                    <h2>
                        Struttura: <?= $hotel["name"]; ?>
                    </h2>
                    <h2>
                        Descrizione:<?= $hotel["description"]; ?>
                    </h2>
                    <h2>
                        Parcheggio: <?= $hotel["parking"] ? "Si!" : "No!"; 
                    ?>
                    </h2>
                    <h2>
                        Valutazione: <?= $hotel["vote"] . "/5"; ?>
                    </h2>
                    <h2>
                        Distanza dal centro: <?= $hotel["distance_to_center"]."km"; ?>
                    </h2>
                </li>
                <?php }?>


            </ul>
        </section>-->


        <section class="container mt-5">
            <table class="table">

                <thead>
                    <tr>
                        <th scope="col">Struttura:</th>
                        <th scope="col">Descrizione:</th>
                        <th scope="col">Parcheggio:</th>
                        <th scope="col">Valutazione:</th>
                        <th scope="col">Distanza dal centro:</th>
                    </tr>
                </thead>
                <?php foreach ($hotels as $hotel) {?>
                <tbody>
                    <tr>
                        <th scope="row"> <?= $hotel["name"]; ?></th>
                        <td><?=$hotel["description"]; ?></td>
                        <td><?=$hotel["parking"] ? "Si!" : "No!"; ?></td>
                        <td><?=$hotel["vote"] . "/5"; ?></td>
                        <td><?=$hotel["distance_to_center"] . "km"; ?></td>

                    </tr>


                </tbody>
                <?php }?>
            </table>
        </section>

    </main>
</body>

</html>