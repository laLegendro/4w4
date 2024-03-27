<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>mon thème</title>

    <!--link rel="stylesheet" href="normalize.css" />
    <link rel="stylesheet" href="style.css" /-->

    <!-- pour aller chercher les pages de style, pour wordpress -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/normalize.css'; ?>" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/style.css'; ?>" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <!-- Font awesome pour les icônes du footer -->
    <script src="https://kit.fontawesome.com/f4dd89e5b2.js" crossorigin="anonymous"></script>
    <!-- Intégration de la police Google Material icônes -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
</head>

<body>

    <div id="menu" class="global">


        <header class="entete__menu">

            <input type="checkbox" id="chk_burger" />
            <label for="chk_burger" class="boutonBurger">
                <span>
                    <svg width="50" height="50" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" color="white">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16"></path>
                    </svg>
                </span>
            </label>



            <?php wp_nav_menu(array("container" => "nav")) ?>
            <?php echo get_custom_logo() ?>
        </header>
    </div>