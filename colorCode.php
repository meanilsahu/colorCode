<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS Grid Example</title>
    <style>
        .container {
            display: grid;
            grid-template-columns: repeat(9, 1fr);
            grid-template-rows: auto;
            gap: 10px;
        }
    </style>
</head>

<body>

    <div class="container">
        <?php
        for ($i = 1; $i < 925; $i++) {
            $red = rand(0, 255);
            $green = rand(0, 255);
            $blue = rand(0, 255);
            $colorCode = sprintf("#%02x%02x%02x", $red, $green, $blue);
            ?>
            <div
                style="background-color:<?php echo $colorCode; ?>; width: 100px; height: 100px; padding: 10px; border: 1px solid darkblue;text-align: center">
                <?php echo $colorCode; ?>
            </div>
        <?php } ?>
    </div>

</body>

</html>