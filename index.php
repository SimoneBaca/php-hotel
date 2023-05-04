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
//aggiungo lista hotel con "logica base"
//foreach($hotels as $hotel){
    //var_dump($hotel);

  //  echo $hotel['name'];
   // echo $hotel['description'];
   // echo $hotel['parking'];
   // echo $hotel['vote'];
  //  echo $hotel['distance_to_center'] . '<br>' ;

//}
?>

 <!-- trasformo la lista in un commento aggiungo la tabella tramite boostrap  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boolean | PHP Hotel</title>
    <!-- Bootstrap 5.2.3 css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card rounded-0 border-0 shadow">
                    <div class="card-body">
                        <h1 class="">
                            Hotels
                        </h1>
                        <div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Hotel name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Parking</th>
                                    <th scope="col">Vote</th>
                                    <th scope="col">Distance to center</th>
                                </tr>
                            </thead>
                            <?php foreach ($hotels as $hotel): ?>
                            <tbody>
                                <tr>
                                    <td> <?=$hotel['name'];?> </td>
                                    <td> <?=$hotel['description'];?></td>
                                    <td> <?= $hotel['parking'];?></td>
                                    <td> <?=$hotel['vote'];?></td>
                                    <td> <?=$hotel['distance_to_center'];?></td>
                                </tr>
                            </tbody>
                            <?php endforeach;?>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>             
</body>
</html>