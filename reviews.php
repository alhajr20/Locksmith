<section id="reviews" class="reviews">
    <button class="reviews__prev">
        <img src="./img/left-arrow.svg" alt="prev button">
    </button>
    <button class="reviews__next">
        <img src="./img/right-arrow.svg" alt="next button">
    </button>
    <div class="container">
        <h2 class="reviews__title">Bewertungen</h2>
        <div class="reviews__wrapper">
            <div class="reviews__inner">
                <div class="reviews__item">
                    <div class="row">
                        <div class="col-4 reviews__info">
                            <img src="./img/reviews-first.webP" alt="Schlüsseldienst client">
                            <h3><?= $reviewsFirstName ?></h3>
                        </div>
                        <div class="col-8 reviews__text">
                            <p>
                                <?= $reviewsFirstText ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="reviews__item">
                    <div class="row">
                        <div class="col-4 reviews__info">
                            <img src="./img/reviews-second.webP" alt="Schlüsseldienst client">
                            <h3><?= $reviewsSecondName ?></h3>
                        </div>
                        <div class="col-8 reviews__text">
                            <p>
                                <?= $reviewsSecondText ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="reviews__item">
                    <div class="row">
                        <div class="col-4 reviews__info">
                            <img src="./img/reviews-third.webP" alt="Schlüsseldienst client">
                            <h3><?= $reviewsThirdName ?></h3>
                        </div>
                        <div class="col-8 reviews__text">
                            <p>
                                <?= $reviewsThirdText ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>