<!DOCTYPE html>
<html lang="<?php echo get_locale(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <!-- Предзагрузка и подключение шрифта -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,900;1,400;1,900&display=swap" rel="stylesheet">
    <!-- Подключение стилей Glide.js -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.core.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.theme.min.css">

    <?php wp_head(); ?>
</head>
<body>
    <div class="mainer-container">
        <header class="header">
            <div class="container">
                <nav class="main-menu">
                    <!-- Логотип -->
                    <a href="/" class="logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header_nomads.png" alt="Nomad's Logo">
                    </a>

                    <!-- Левое меню -->
                    <ul class="menu-items">
                        <li><a href="#about">Despre noi</a></li>
                        <li><a href="#partners">Colaborare</a></li>
                        <li><a href="#help">Ajutor</a></li>
                    </ul>

                    <!-- Правое меню -->
                    <div class="right-menu">
                        <div class="language-switcher">
                            <button class="lang-btn">
                                <img class="lang-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/flag-ro.svg" alt="RO">
                                <span class="lang-text">RO</span>
                                <span class="arrow">&#9662;</span>
                            </button>
                            <ul class="lang-menu">
                                <li data-lang="ru">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flag-ru.svg" alt="RU"> RU
                                </li>
                                <li data-lang="en">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flag-en.svg" alt="EN"> EN
                                </li>
                            </ul>
                        </div>
                        <a href="#where-to-buy" class="menu-link">Unde să cumperi?</a>
                        <button class="menu-toggle">
                            <span class="menu-icon">&#9776;</span>
                        </button>
                    </div>
                </nav>
            </div>
        <!-- Блок с текстом -->
        <div class="hero-text">
            <div class="hero-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/index_our_device.png" alt="Nomad's Logo">
            </div>
            <h1>DESCOPERĂ O NOUĂ EXPERIENȚĂ <br>
            A CĂLĂTORIILOR <br>
             CU DISPOZITIVUL DE LA NOMAD'S</h1>
        </div>
        </header>

