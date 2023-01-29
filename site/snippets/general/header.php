<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- META INFORMATION -->
        <?php snippet("meta_information"); ?>
        <?php snippet("robots"); ?>

        <!-- FAVICON -->
        <link rel="apple-touch-icon" sizes="180x180" href="<?= $site->url() ?>/assets/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?= $site->url() ?>/assets/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?= $site->url() ?>/assets/favicon/favicon-16x16.png">
        <link rel="manifest" href="<?= $site->url() ?>/assets/favicon/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

        <!-- FONT AWESOME -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="screen">

        <!-- GOOGLE FONTS -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Murecho:wght@400;500;600&family=Roboto:wght@400;500&display=swap" rel="stylesheet" media="screen">

        <!-- STYLESHEET -->
        <?= css("build/css/style.css") ?>

        <!-- SWIPERJS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    </head>
    <body>

        <!-- COOKIES -->
        <?php if($site->cookiesSwitch()->toBool()): ?>
            <div class="cookie-consent-modal">
                <div class="content-container">
                    <div class="content">
                        <h3><?= $site->cookiesTitle() ?></h3>
                        <p><?= $site->cookiesParagraph() ?></p>

                        <div class="buttons flex">
                            <button class="button button-secondary cancel">Geen cookies</button>
                            <button class="button button-primary accept">Accepteren</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>