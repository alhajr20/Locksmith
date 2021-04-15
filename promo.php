<main id="promo" class="promo">
    <div class="container">
        <div class="row">
            <div class="col-5 promo__info">
                <h1><?= $promoTitle ?></h1>
                <p class="promo__description">
                    <?= $promoDesc ?>
                </p>
                <a href="<?= $promoLink ?>">
                    <img src="./img/phone-call.svg" alt="Schlüsseldienst call promo">
                    <?= $phoneText ?>
                </a>
            </div>
            <div class="col-6 promo__img">
                <img src="./img/promo.webP" alt="Schlüsseldienst main-image">
            </div>
        </div>
    </div>
</main>