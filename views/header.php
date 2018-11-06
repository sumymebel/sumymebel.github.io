<!DOCTYPE html>

<html>

    <head>

        <!-- http://getbootstrap.com/ -->

        <link href="css\\styles.css" rel="stylesheet"/>
        <link href="css\\nivo-slider.css" rel="stylesheet"/>

        <?php if (isset($title)): ?>
            <title>МнЗ | <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>C$50 Finance</title>
        <?php endif ?>

        <script src="js\\jquery.nivo.slider.js"></script>
        <script src="js\\jquery.nivo.slider.pack.js"></script>
        <script src="js\\jquery-1.7.1.min.js"></script>

    </head>

    <body>

        <div class="container">

            <div id="top">
                <div>
                    <a href="/"><img alt="C$50 Finance" src="img\\logo.png"/></a>
                </div>

                    <div class = "button">

                        <form method="LINK" action="/">
                        <input type="submit" value="Головна">
                        </form>

                    </div>

                    <div class = "button">

                        <form method="LINK" action="/public/gallery.php">
                        <input type="submit" value="Галерея">
                        </form>

                    </div>

                    <div class = "button">

                        <form method="LINK" action="/public/services.php">
                        <input type="submit" value="Послуги">
                        </form>

                    </div>

                    <div class = "button">

                        <form method="LINK" action="/public/stock.php">
                        <input type="submit" value="Вироби в наявності">
                        </form>

                    </div>

                    <div class = "button">

                        <form method="LINK" action="/public/contact.php">
                        <input type="submit" value="Контакт">
                        </form>

                    </div>

                    <div class = "button">

                        <form method="LINK" action="/public/about.php">
                        <input type="submit" value="Про виробника">
                        </form>

                    </div>

            </div>

            <div id="middle">
                <div id = "information">


