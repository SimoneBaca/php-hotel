<?php

$hotels = [

    [
        'Name' => 'Hotel Belvedere',
        'Description' => 'Hotel Belvedere Descrizione',
        'Parking' => true,
        'Vote' => 4,
        'Distance_to_center (km)' => 10.4
    ],
    [
        'Name' => 'Hotel Futuro',
        'Description' => 'Hotel Futuro Descrizione',
        'Parking' => true,
        'Vote' => 2,
        'Distance_to_center (km)' => 2
    ],
    [
        'Name' => 'Hotel Rivamare',
        'Description' => 'Hotel Rivamare Descrizione',
        'Parking' => false,
        'Vote' => 1,
        'Distance_to_center (km)' => 1
    ],
    [
        'Name' => 'Hotel Bellavista',
        'Description' => 'Hotel Bellavista Descrizione',
        'Parking' => false,
        'Vote' => 5,
        'Distance_to_center (km)' => 5.5
    ],
    [
        'Name' => 'Hotel Milano',
        'Description' => 'Hotel Milano Descrizione',
        'Parking' => true,
        'Vote' => 2,
        'Distance_to_center (km)' => 50
    ],

];

// var_dump($hotels);           // stampo l'array di array
//aggiungo lista hotel con "logica base"

//foreach($hotels as $hotel){


//  echo $hotel['name'];
// echo $hotel['description'];
// echo $hotel['parking'];
// echo $hotel['vote'];
//  echo $hotel['distance_to_center'] . '<br>' ;

//}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boolean | PHP Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="wrapper container mt-5 text-center">
        <h1 class="my-5"> Hotels</h1>
        <form action="index.php" method="GET"> 
            <label for="parking">Filtra per parcheggio</label>
            <select class="my-5" id="parking" name="parking">
                <option value="">TUTTI</option>
                <option value="withparking">Con parcheggio</option>
                <option value="notparking">Senza parcheggio</option>
            </select>
            <input type="submit">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <!-- le key sono uguali per tutti -->
                        <?php foreach ($hotels[0] as $key => $hotel) { ?>
                            <th scope="col"><?php echo $key ?></th>
                        <?php } ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (isset($_GET["parking"])) {
                        $filter_parking = $_GET['parking'];       // prendo il valore del select
                    } else {
                        $filter_parking = "";
                    }
                    ?>
                    <?php foreach ($hotels as $hotel) {
                        if ($filter_parking === "" || ($filter_parking === "withparking" && $hotel['Parking'] === true) || ($filter_parking === "notparking" && $hotel['Parking'] === false)) {    
                             // se il valore del select è vuoto oppure se il valore del select è con parcheggio e l'hotel ha il parcheggio oppure se il valore del select è senza parcheggio e l'hotel non ha il parcheggio
                    ?>
                            <tr>
                                <td><?php echo $hotel['Name']; ?></td>
                                <td><?php echo $hotel['Description']; ?></td>
                                <td><?php echo $hotel['Parking'] ? 'Yes' : 'No'; ?></td>
                                <td><?php echo $hotel['Vote']; ?></td>
                                <td><?php echo $hotel['Distance_to_center (km)']; ?></td>
                            </tr>
                        <?php } ?>
                    <?php } ?>

                </tbody>
            </table>
        </form>

    </div>

</body>

</html>