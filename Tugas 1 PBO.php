<?php
    require "Laptop.php";

    $Lenovo = new Laptop (
        "Lenovo",
        "Lenovo IdeaPad 110",
        "AMD APU A9-9400",
        "Radeon™ R5 M430",
        "RAM 4GB DDR4",
        "HDD 1TB"
    );

    $Asus = new Laptop (
        "Asus",
        "Asus ZenBook 13 UX334FLC",
        "Intel® Core™ i5 10210U Processor",
        "NVIDIA® GeForce® MX250",
        "8 GB Onboard memory",
        "SSD 1TB"
    );

    $Acer = new Laptop(
        "Acer",
        "Acer Predator Helios 500",
        "Intel® Core™ i9-8950HK",
        "NVIDIA® GeForce® GTX™ 1070",
        "64GB DDR4",
        "HDD 1TB"
    )
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Tugas 1 PBO</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <div class="wrapper">
            <h1 class="title">Objek Laptop</h1>

            <div class="specification">
                <p>
                    <?php
                    $Lenovo->showSpecs();
                    ?>
                </p>
            </div>

            <ul class="servicing">
                <li class="service">
                    <?php
                    $Lenovo->changeCPU("Intel Celeron");
                    ?>
                </li>
                <li class="service">
                    <?php
                    $Lenovo->changeGraphicCard("Intel(R) Iris(TM) Graphics");
                    ?>
                </li>
                <li class="service">
                    <?php
                    $Lenovo->changeMemory("4GB DDR3");
                    ?>
                </li>
                <li class="service">
                    <?php
                    $Lenovo->changeStorage("500GB");
                    ?>
                </li>
            </ul>

            <div class="specification">
                <p>
                    <?php
                    $Lenovo->showSpecs();
                    ?>
                </p>
            </div>

            <div class="divider"></div>

            <div class="specification">
                <?php
                    $Asus->showSpecs();
                ?>
            </div>

            <div class="divider"></div>

            <div class="specification">
                <?php
                $Acer->showSpecs();
                ?>
            </div>
        </div>
    </main>
</body>
</html>
