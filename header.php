<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class 18</title>
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <div class="container">
        <div class="header-part">
            <h2>Welcome!</h2>
            <?php
            function is_active($url)
            {
                if (strpos($_SERVER['REQUEST_URI'], $url) !== false) {
                    return 'active';
                }
            }

            $menus = [
                'index.php'     =>  'Home',
                'about.php'     =>  'About',
                'portfolio.php' =>  'Portfolio',
                'contact.php'   =>  'Contact'
            ];
            ?>

            <div class="nav-bar">
                <ul>
                    <?php foreach ($menus as $key => $value) : ?>
                        <li><a class="<?php echo is_active($key) ?>" href="<?php echo $key ?>"><?php echo $value ?></a></li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>