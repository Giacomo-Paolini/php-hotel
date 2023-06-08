<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Hotel</title>
</head>

<body>
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
    <div class="container">
        <div class="row">
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <?php foreach ($hotels as $hotel) { ?>
                            <th scope=col><?php echo $hotel["name"] ?></th>
                        <?php } ?>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Description</th>
                        <?php foreach ($hotels as $hotel) { ?>
                            <td scope=col><?php echo $hotel["description"] ?></td>
                        <?php } ?>
                    </tr>
                    <tr>
                        <th scope="row">Parking</th>
                        <?php foreach ($hotels as $hotel) { ?>
                            <?php if ($hotel["parking"] === true) { ?>
                                <td scope=col>Yes</td>
                            <?php } else { ?>
                                <td scope=col>No</td>
                            <?php } ?>
                        <?php } ?>
                    </tr>
                    <tr>
                        <th scope="row">Vote</th>
                        <?php foreach ($hotels as $hotel) { ?>
                            <td scope=col><?php echo $hotel["vote"] ?></td>
                        <?php } ?>
                    </tr>
                    <tr>
                        <th scope="row">Distance to center</th>
                        <?php foreach ($hotels as $hotel) { ?>
                            <td scope=col><?php echo $hotel["distance_to_center"] . " km" ?></td>
                        <?php } ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>