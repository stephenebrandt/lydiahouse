<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-147378148-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-147378148-1');
        </script>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <meta name="description" content="Lydia House is a non-profit organization and a ministry of First Baptist Orlando. Our mission is to minister to previously incarcerated women and create lasting change in their lives by providing a residential, Faith-based program that teaches Biblical life principles.">
        <title>Lydia House - Transitional Home for Women</title>
        <link rel="stylesheet" href="css/styles.min.css" />
        <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
        <script
            src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
            crossorigin="anonymous"
        ></script>
        <script src="https://kit.fontawesome.com/a7ffb2bccd.js"></script>
        <meta property="og:image" content="http://www.thelydiahouse.com/img/og.jpg" />
        <meta property="og:image:width" content="400" />
        <meta property="og:image:height" content="300" />
        <meta property="og:description" content="Lydia House is a non-profit organization and a ministry of First Baptist Orlando. Our mission is to minister to previously incarcerated women and create lasting change in their lives by providing a residential, Faith-based program that teaches Biblical life principles." />
        <meta name="theme-color" content="#8f4899">
        <meta name="msapplication-navbutton-color" content="#8f4899">
        <meta name="apple-mobile-web-app-status-bar-style" content="#8f4899">
    </head>
    <body id="<?= basename($_SERVER['PHP_SELF'], ".php")?>">
        <header id="header-index">
            <img
                src="img/lh-logo-web.png"
                alt="Lydia House - Transitional Home for Women"
            />
            <nav id="nav">
                <ul>
                    <li><a href="about.php">About</a></li>
                    <li id="involved">
                        <a href="#" onclick="return false">Get Involved</a>
                        <ul id="involved-drop">
                            <li><a href="volunteer.php">Volunteer</a></li>
                            <li>
                                <a href="partners.php">Community Partners</a>
                            </li>
                            <li>
                                <a href="give.php">Give</a>
                            </li>
                        </ul>
                    </li>
                    <li id="under-drop"><a href="contact.php">Contact Us</a></li>
                    <li><a href="give.php" class="btn btn-pink">Give</a></li>
                </ul>
            </nav>
            <span class="icon" onclick="myFunction()">
                <i class="fas fa-bars"></i>
            </span>
        </header>