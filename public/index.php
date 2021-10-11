<?php include './script.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Maker</title>
    <style>
        a.active {
            color: red;
            text-transform: uppercase;
        }
    </style>
</head>
<body>
    <nav>
        <?php 
        $pages = [
            ["name" => "Home", "file" => "/index.php"], 
            ["name" => "About us", "file" => "/about.php"],
            ["name" => "Contact", "file" => "/contact.php"],
        ];
        if (function_exists('makeMenu')) {
            echo makeMenu($pages, $_SERVER['PHP_SELF']);
        }
        ?>
    </nav>
</body>
</html>