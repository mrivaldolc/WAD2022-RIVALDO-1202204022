<!-- Menu Booking -->
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

    <div class="mt-2 mb-2 container bg-white">
        <h3 class="p-1" style="text-align: center; color: dark">Rent your car now!</h3>
    </div>

    <div class="container card shadow-sm">
        <div class="d-flex justify-content-around">
            <div class="col-6 ps-5 pe-5 d-flex align-items-center">
                <?php
                if (isset($_POST["img"])) {
                ?><img class="" width="100%" src="<?= $_GET["img"]; ?>" alt="">
                <?php
                } else {
                ?><img width="100%" src="image/trr.jpg" alt="">
                <?php } ?>
            </div>
            <div class="col-6 ps-5 pe-5">
                <ul type="none">
                    <form action="mybooking.php" method="post">
                        <li class="m-1">
                            <label for="nama">Name</label><br>
                            <input class="form-control" type="text" name="nama" id="nama">
                        <li class="m-1">
                            <label for="event">Book Date</label><br>
                            <input class="form-control" type="date" name="event" id="event">
                        </li>
                        <li class="m-1">
                            <label for="time">Start Time</label><br>
                            <input class="form-control" type="time" name="time" id="time">
                        </li>
                        <li class="m-1">
                            <label for="jam">Duration (Days)</label><br>
                            <input class="form-control" type="number" name="jam" id="jam" min="1" value="1">
                        </li>
                        <li class="m-1">
                            <label for="cartype">Car Type</label>
                            <select class="form-select" name="cartype" id="cartype">
                                <option selected>Choose...</option>
                                <?php foreach ($datacar as $tmp) : ?>
                                    <?php
                                    if ($tmp["car"] == $_GET["car"]) {
                                    ?><option selected="selected" value="<?= $tmp["car"]; ?>"><?= $tmp["car"]; ?></option>
                                    <?php
                                    } else {
                                    ?><option value="<?= $tmp["car"]; ?>"><?= $tmp["car"]; ?></option>
                                    <?php } ?>
                                <?php endforeach; ?>
                            </select>
                        </li>
                        <li class="m-1">
                            <label for="pone">Phone Number</label><br>
                            <input class="form-control" type="number" name="pone" id="pone" min="0">
                        </li>
                        <!-- ceklist -->
                        <li class="m-1">
                            <label for="service">Add Service(s)</label><br>
                            <input class="form-check-input m-1" type="checkbox" name="prizee[]" value="Health Protocol" id="health protocol"><label class="form-check-label" for="health protocolg">Health Protocol / Rp.25.000</label><br>
                            <input class="form-check-input m-1" type="checkbox" name="prizee[]" value="Driver" id="driver"><label class="form-check-label" for="driver">Driver / Rp.100.000</label><br>
                            <input class="form-check-input m-1" type="checkbox" name="prizee[]" value="Full Filled" id="full filled"><label class="form-check-label" for="fuel filled">Full Filled / Rp.250.000</label><br>
                        </li>
                        <!-- end ceklist -->
                        <li class="text-center">
                            <button class="btn btn-primary justify-content-around" type="submit">Book</button>
                        </li>
                    </form>
                </ul>
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