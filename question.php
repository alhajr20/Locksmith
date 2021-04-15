<section id="accordion" class="accordion">
    <div class="container">
        <h2 class="accordion__title">Fragen und Antworten</h2>
        <div class="accordion__wrapper">
            <div itemscope itemtype="http://schema.org/Question">
                <div class="accordion__item">
                    <div class="accordion__item-trigger">
                        <p itemprop="name">
                            <?= $questionFirst ?>
                        </p>
                        <img src="./img/add.svg" alt="add">
                    </div>
                    
                    <div class="accordion__item-answer">
                        <div itemprop="acceptedAnswer" itemscope itemtype="http://schema.org/Answer">
                            <p itemprop="text">
                                <?= $answerFirst ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div itemscope itemtype="http://schema.org/Question">
                <div class="accordion__item">
                    <div class="accordion__item-trigger">
                        <p itemprop="name">
                            <?= $questionSecond ?>
                        </p>
                        <img src="./img/add.svg" alt="add">
                    </div>
                    <div class="accordion__item-answer">
                        <div itemprop="acceptedAnswer" itemscope itemtype="http://schema.org/Answer">
                            <p itemprop="text">
                                <?= $answerSecond ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div itemscope itemtype="http://schema.org/Question">
                <div class="accordion__item">
                    <div class="accordion__item-trigger">
                        <p itemprop="name">
                            <?= $questionThird ?>
                        </p>
                        <img src="./img/add.svg" alt="add">
                    </div>
                    <div class="accordion__item-answer">
                        <div itemprop="acceptedAnswer" itemscope itemtype="http://schema.org/Answer">
                            <p itemprop="text">
                                <?= $answerThird ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div itemscope itemtype="http://schema.org/Question">
                <div class="accordion__item">
                    <div class="accordion__item-trigger">
                        <p itemprop="name">
                            <?= $questionFourth ?>
                        </p>
                        <img src="./img/add.svg" alt="add">
                    </div>
                    <div class="accordion__item-answer">
                        <div itemprop="acceptedAnswer" itemscope itemtype="http://schema.org/Answer">
                            <p itemprop="text">
                                <?= $answerFourth ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div itemscope itemtype="http://schema.org/Question">
                <div class="accordion__item">
                    <div class="accordion__item-trigger">
                        <p itemprop="name">
                            <?= $questionFiveth ?>
                        </p>
                        <img src="./img/add.svg" alt="add">
                    </div>
                    <div class="accordion__item-answer">
                        <div itemprop="acceptedAnswer" itemscope itemtype="http://schema.org/Answer">
                            <p itemprop="text">
                                <?= $answerFiveth ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div itemscope itemtype="http://schema.org/Question">
                <div class="accordion__item">
                    <div class="accordion__item-trigger">
                        <p itemprop="name">
                            <?= $questionSixth ?>
                        </p>
                        <img src="./img/add.svg" alt="add">
                    </div>
                    <div class="accordion__item-answer">
                        <div itemprop="acceptedAnswer" itemscope itemtype="http://schema.org/Answer">
                            <p itemprop="text">
                                <?= $answerSixth ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>