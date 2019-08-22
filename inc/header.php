<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Lydia House - Transitional Home for Women</title>
        <link rel="stylesheet" href="css/styles.css" />
        <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
        <script
            src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
            crossorigin="anonymous"
        ></script>
    </head>
    <body id="<?= basename($_SERVER['PHP_SELF'], ".php")?>">
        <header>
            <img
                src="img/lh-logo-web.png"
                alt="Tenth Anniversary - Lydia House - Transitional Home for Women"
                height="66px"
                onclick="location.href = 'index.php'"
            />
            <nav>
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
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="give.php" class="btn btn-pink">Give</a></li>
                </ul>
            </nav>
        </header>