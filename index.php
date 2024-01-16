<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <form class="d-inline-flex align-item-center" action="index.php" method="GET">
        <div class="input-group me-1">
            <div class="input-group-text">
                <input class="form-check-input mt-0" type="checkbox" name="parking_filter_status" value="true">
            </div>
            <label class="form-control" for="parking_filter_status">Only whit parking</label>
        </div>
        <button class="btn btn-primary" type="submit">Apply</button>
    </form>

    <table class="table">
        <thead>
            <th scope="col">Name</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Parking</th>
            <th scope="col">Vote</th>
            <th scope="col">Distance to center</th>
        </thead>
        <tbody>
            <?php foreach($hotels as $hotel){ ?>
                <?php
                    if(isset($_GET["parking_filter_status"]) && empty($hotel["parking"])){
                        continue;
                    }
                ?>
                <tr>
                    <td>
                        <?php 
                            echo $hotel["name"];
                        ?>
                    </td>
                    <td>
                        <?php 
                            echo $hotel["description"];
                        ?>
                    </td>
                    <td>
                        <?php 
                            echo $hotel["parking"];
                        ?>
                    </td>
                    <td>
                        <?php 
                            echo $hotel["vote"];
                        ?>
                    </td>
                    <td>
                        <?php 
                            echo $hotel["distance_to_center"];
                        ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>