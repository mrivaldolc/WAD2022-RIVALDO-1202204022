<!-- Menu awal/home -->
<?php

$datacar = [
    [
        "car" => "Toyota Alphard",
        "price" => 700000,
        "img" => "image/alphard.jpg"
    ],
    [
        "car" => "Toyota Land-Cruiser",
        "price" => 650000,
        "img" => "image/lcc.jpg"
    ],
    [
        "car" => "Honda CR-V",
        "price" => 500000,
        "img" => "image/crv.jpg"
    ],
]

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>EAD RENT CAR</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container-fluid">

            <div class="collapse navbar-collapse justify-content-md-center">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="booking.php">Booking</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div>
        <p class="m-2" style="text-align: center; font-size: 25px">WELCOME TO EAD RENT</p>
    </div>

    <div class="container bg-white">
        <p class="p-1" style="text-align: center; color: dark">Find your best deal, here!</p>
    </div>

    <div class="container">
        <div class="d-flex justify-content-around">
            <div class="col-3 m-1">
                <div class="card shadow-sm rounded">
                    <img src="<?php echo $datacar[0]["car"]; ?>" alt="">
                    <div class="m-3">
                        <p class="m-0" style="font-size: 20px"><?php echo $datacar[0]["car"]; ?></p>
                        <p class="m-0" style="color: grey">Rp.<?php echo $datacar[0]["price"]; ?> / Day</p>
                    </div>
                    <hr class="m-0">
                    <p class="m-2" style="text-align: center; color: blue;">6 KURSI</p>
                    <hr class="m-0">
                    <p class="m-2" style="text-align: center; color: blue;">2000 CC</p>
                    <hr class="m-0">
                    <p class="m-2" style="text-align: center; color: blue;">MATIC</p>
                    <hr class="m-0">
                    <div class="text-center bg-light">
                        <button class="m-2 btn btn-primary" type="submit"><a href="booking.php?img=<?= $datacar[0]["img"]; ?>&car=<?= $datacar[0]["car"]; ?>" style="color: white; text-decoration: none;">Book Now</a></button>
                    </div>
                </div>
            </div>
            <div class="col-3 m-1 ms-2 me-2">
                <div class="card shadow-sm rounded">
                    <img src="<?php echo $datacar[1]["car"]; ?>" alt="">
                    <div class="m-3">
                        <p class="m-0" style="font-size: 20px"><?php echo $datacar[1]["car"]; ?></p>
                        <p class="m-0" style="color: grey">Rp.<?php echo $datacar[1]["price"]; ?> / Day</p>
                    </div>
                    <hr class="m-0">
                    <p class="m-2" style="text-align: center; color: blue;">7 KURSI</p>
                    <hr class="m-0">
                    <p class="m-2" style="text-align: center; color: blue;">3000 CC</p>
                    <hr class="m-0">
                    <p class="m-2" style="text-align: center; color: blue;">4WD MATIC</p>
                    <hr class="m-0">
                    <div class="text-center bg-light">
                        <button class="m-2 btn btn-primary" type="submit"><a href="booking.php?img=<?= $datacar[1]["img"]; ?>&car=<?= $datacar[1]["car"]; ?>" style="color: white; text-decoration: none;">Book Now</a></button>
                    </div>
                </div>
            </div>
            <div class="col-3 m-1">
                <div class="card shadow-sm rounded">
                    <img src="<?php echo $datacar[2]["car"]; ?>" alt="">
                    <div class="m-3">
                        <p class="m-0" style="font-size: 20px"><?php echo $datacar[2]["car"]; ?></p>
                        <p class="m-0" style="color: grey">Rp.<?php echo $datacar[2]["price"]; ?> / Day</p>
                    </div>
                    <hr class="m-0">
                    <p class="m-2" style="text-align: center; color: blue;">7 KURSI</p>
                    <hr class="m-0">
                    <p class="m-2" style="text-align: center; color: blue;">1500 CC</p>
                    <hr class="m-0">
                    <p class="m-2" style="text-align: center; color: blue;">MATIC</p>
                    <hr class="m-0">
                    <div class="text-center bg-light">
                        <button class="m-2 btn btn-primary" type="submit"><a href="booking.php?img=<?= $datacar[2]["img"]; ?>&car=<?= $datacar[2]["car"]; ?>" style="color: white; text-decoration: none;">Book Now</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <footer class="fixed-bottom text-center pt-3 bg-light">
        <p style="text-align: center; color: lightslategray;">
            Created by <?php echo "Rivaldo_1202204022" ?>
        </p>
    </footer>
    <!-- end footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>