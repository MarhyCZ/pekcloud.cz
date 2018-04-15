<!doctype html>
<html lang="cs-CZ">

<!-- Main head -->

<head>
    <meta name="description" content="Pekař. V cloudu. Vše, co student potřebuje. Dostupné kdykoliv, odkudkoliv. Pro Gymnázium Dr. Josefa Pekaře">
    <meta name="keywords" content="PEK Cloud, Gymnázium, Pekař, Dr. Josefa Pekaře, Marhan, MarStad, MarStad Corporation, Disk, Email, Kalendář, Weby, Stránky">
    <title>Aplikace - PEK Cloud</title>
    <?php readfile( "../php/head.php"); ?>
</head>

<body>
    <!-- Navigation -->
    <header>
        <?php readfile( "../php/header.php"); ?>
    </header>

    <!-- Page -->
    <main>
        <div class="background"></div>
        <div class="btn-page">
            <div class="container">
                <div class="row">
                    <div class="col s6 m3">
                        <a href="https://drive.google.com/a/pekcloud.cz/#my-drive" class="waves-effect waves btn-large" target="_blank">
                            <img class="responsive-img" src="/images/icons/aplikace/drive.svg">Disk</a>
                    </div>
                    <div class="col s6 m3">
                        <a href="http://www.google.com/calendar/hosted/pekcloud.cz" class="waves-effect waves btn-large" target="_blank">
                            <img class="responsive-img" src="/images/icons/aplikace/calendar.svg">Kalendář</a>
                    </div>
                    <div class="col s6 m3">
                        <a href="http://sites.google.com/a/pekcloud.cz" class="waves-effect waves btn-large" target="_blank">
                            <img class="responsive-img" src="/images/icons/aplikace/sites.svg">Weby</a>
                    </div>
                    <div class="col s6 m3">
                        <a href="https://mail.pekargmb.cz/bakaweb" class="waves-effect waves btn-large" target="_blank">
                            <img class="responsive-img" src="/images/icons/aplikace/bakalari.svg">Bakaláři</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer and javascript -->
    <?php readfile( "../php/footer.php"); ?>

    <?php readfile( "../php/js.php"); ?>
</body>
