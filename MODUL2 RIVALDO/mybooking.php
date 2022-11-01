<!-- Menu My Booking -->
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
];
$nama = $_POST["nama"];
// tanggal waktu
$event = $_POST["event"] . " " . $_POST["time"];
$starev = date("d-m-Y H:i", strtotime($event));
$endev = date("d-m-Y H:i", strtotime($event) + 60 * 60 * 24 * $_GET["jam"]);
$cartype = $_POST["cartype"];
$pone = $_POST["pone"];
// fitur tambahan 
$priceadd = 0;
if (isset($_POST["prizee"])) {
    foreach ($_POST["prizee"] as $prizee) {
        if ($prizee == "Health Protocol") {
            $priceadd += 25000;
        }
        if ($prizee == "Driver") {
            $priceadd += 100000;
        }
        if ($prizee == "Full Filled") {
            $priceadd += 250000;
        }
    }
} else {
    $priceadd += 0;
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- title -->
    <title>EAD RENT CAR</title>
    <!-- end title -->
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

    <div class="container" style="text-align: center;">
        <div class="m-2">
            <p class="m-0" style="font-size:30px">Thank You <?php echo "$nama" ?> for Reserving</p>
            <p class="m-0" style="font-size:25px">Please double check your reservation details</p>
        </div>
    </div>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Booking Number</th>
                    <th scope="col">Name</th>
                    <th scope="col">Check-in</th>
                    <th scope="col">Check-out</th>
                    <th scope="col">Car Type</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Service(s)</th>
                    <th scope="col">Total Price</th>
                </tr>
            </thead>
            <tbody class="bg-light">
                <tr>
                    <!-- acak angka -->
                    <td><?php echo rand(8000000, 10000000); ?></td>
                    <td><?php echo $nama; ?></td>
                    <td><?php echo $starev ?></td>
                    <td><?php echo $endev ?></td>
                    <td><?php echo $cartype ?></td>
                    <td><?php echo $pone ?></td>
                    <td>
                        <?php
                        if (isset($_POST["prizee"])) {
                            foreach ($_POST["prizee"] as $prizee) {
                                echo "<li>$prizee</li>";
                            }
                        } else {
                            echo "no service";
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        if ($_POST["cartype"] == $datacar[0]["car"]) {
                            echo ($_POST["jam"] * $datacar[0]["price"]) + $priceadd;
                        } else if ($_POST["cartype"] == $datacar[1]["car"]) {
                            echo ($_POST["jam"] * $datacar[1]["price"]) + $priceadd;
                        } else if ($_POST["cartype"] == $datacar[2]["car"]) {
                            echo ($_POST["jam"] * $datacar[2]["price"]) + $priceadd;
                        } else {
                            echo "0";
                        }
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>
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