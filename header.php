<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Schlüsseldienst</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name=robots content=all>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="title" content="<?= $metaTitle ?>">
    <meta name="description" content="<?= $metaDescr ?>">
    <meta name=format-detection content="telephone=no">

    <?php if (true == $isHomePage): ?>
        <link rel="canonical" href="index.html">
    <?php endif; ?>

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= $url ?>">
    <meta property="og:title" content="<?= $metaTitle ?>">
    <meta property="og:description" content="<?= $metaDescr ?>">
    <meta property="og:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?= $url ?>">
    <meta property="twitter:title" content="<?= $metaTitle ?>">
    <meta property="twitter:description" content="<?= $metaTitle ?>">
    <meta property="twitter:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <a href="tel:89287888888" class="call">
        <img src="./img/phone-call.svg" alt="call" class="callIcon">
    </a>
    <div class="overlay"></div>
    <header id="header" class="header">
        <div class="row">
            <div class="col-6 header__logo">
                <img src="./img/logo.webP" alt="Schlüsseldienst logo">
            </div>
            <nav class="col-5 header__nav">
                <button><img src="./img/close.svg" alt="closeMenu"></button>
                <ul>
                    <li><a href="#service">Dienstleistungen</a></li>
                    <li><a href="#reviews">Bewertungen</a></li>
                    <li><a href="#aboutUs">Über uns</a></li>
                    <li><a href="#accordion">Fragen und Antworten</a></li>
                </ul>
            </nav>
            <div class="col-5 col-2-sm header__humburger">
                <img src="./img/menu.svg" alt="showMenu">
            </div>
        </div>
    </header>