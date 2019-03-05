<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="dist/fonts/stylesheet.css">
    <link rel="stylesheet" href="dist/css/modules/jquery.mmenu.all.css">
    <link rel="stylesheet" href="dist/css/modules/ion.rangeSlider.css">
    <link rel="stylesheet" href="dist/css/app.css">
</head>
<body>
<?php include 'header.php' ?>
<div id="page">
    <div class="container slider__wrap">
        <div class="slider">
            <div class="slider__item--wrap" style="background-image: url(dist/img/slide.jpg);">
                <div class="slider__item">
                    <div class="slider__content">
                        <div class="slider__content--top">Индивидуальный <br> пошив по размерам клиента</div>
                        <div class="slider__content--middle">За 1 день</div>
                        <div class="slider__content--bottom">с момента <br> Заказа</div>
                    </div>
                </div>
            </div>
            <div class="slider__item--wrap" style="background-image: url(dist/img/slide.jpg);">
                <div class="slider__item">
                    <div class="slider__content">
                        2
                    </div>
                </div>
            </div>
            <div class="slider__item--wrap" style="background-image: url(dist/img/slide.jpg);">
                <div class="slider__item">
                    <div class="slider__content">
                        3
                    </div>
                </div>
            </div>
            <div class="slider__item--wrap" style="background-image: url(dist/img/slide.jpg);">
                <div class="slider__item">
                    <div class="slider__content">
                        4
                    </div>
                </div>
            </div>
        </div>
        <div class="slider__nav">
            <div class="slider__nav--item__wrap">
                <div class="slider__nav--item" style="background-image: url(dist/img/slide.jpg);">

                </div>
            </div>
            <div class="slider__nav--item__wrap">
                <div class="slider__nav--item" style="background-image: url(dist/img/slide.jpg);">

                </div>
            </div>
            <div class="slider__nav--item__wrap">
                <div class="slider__nav--item" style="background-image: url(dist/img/slide.jpg);">

                </div>
            </div>
            <div class="slider__nav--item__wrap">
                <div class="slider__nav--item" style="background-image: url(dist/img/slide.jpg);">

                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="inner">
            <div class="statistics">
                <div class="statistics__item--wrap">
                    <div class="statistics__item">
                        <div class="statistics__item--icon"><img src="dist/img/stat1.png" alt=""></div>
                        <div class="statistics__item--info">мы уже <br> 25 лет на <br> рынке</div>
                    </div>
                </div>
                <div class="statistics__item--wrap">
                    <div class="statistics__item">
                        <div class="statistics__item--icon"><img src="dist/img/stat2.png" alt=""></div>
                        <div class="statistics__item--info"> более 50 000 <br> отшитых <br> штор</div>
                    </div>
                </div>
                <div class="statistics__item--wrap">
                    <div class="statistics__item">
                        <div class="statistics__item--icon"><img src="dist/img/stat3.png" alt=""></div>
                        <div class="statistics__item--info">более 1000 <br> метров ткани <br> на складе</div>
                    </div>
                </div>
                <div class="statistics__item--wrap">
                    <div class="statistics__item">
                        <div class="statistics__item--icon"><img src="dist/img/stat4.png" alt=""></div>
                        <div class="statistics__item--info">Более 1000 <br> постоянных <br> клиентов</div>
                    </div>
                </div>
                <div class="statistics__item--wrap">
                    <div class="statistics__item">
                        <div class="statistics__item--icon"><img src="dist/img/stat5.png" alt=""></div>
                        <div class="statistics__item--info">Более 100 метров <br> установленных <br> карнизов</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="inner catalog">
            <?php include 'sidebar.php'; ?>
            <div class="catalog__wrap">
                <div class="catalog__title">Новинки</div>
                <div class="catalog__items">
                    <?php foreach (range(1, 9) as $value) { ?>
                        <div class="catalog__item--wrap">
                            <div class="catalog__item">
                                <div class="catalog__item--pic"
                                     style="background-image: url(dist/img/item1.jpg);"></div>
                                <div class="catalog__item--title">Комплект штор 1 Комплект штор 1 Комплект штор 1</div>
                                <div class="catalog__item--intro">Комплект штор Брауни из светонепроницаемой ткани</div>
                                <div class="catalog__item--price">
                                    <div class="catalog__item--price__num">64 200 <i class="fa fa-rub"
                                                                                     aria-hidden="true"></i></div>
                                    <div class="catalog__item--price__stock"><img src='dist/img/stock.png' alt=""> В
                                        наличии
                                    </div>
                                </div>
                                <a href="#" class="catalog__item--btn catalog__item--btn__add">Добавить в корзину</a>
                                <a href="#" class="catalog__item--btn catalog__item--btn__click">Купить в один клик</a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="question">
                    <div class="question__title">Остались вопросы?</div>
                    <div class="question__intro">Если у Вас остались вопросы — заполните форму и наши специалисты
                        свяжутся с
                        Вами ближайшее время
                    </div>
                    <form class="question__form">
                        <div class="question__form--row">
                            <div class="question__form--col">
                                <label for="inp1">Представьтесь, пожалуйста</label>
                                <input type="text" id="inp1">
                            </div>
                            <div class="question__form--col">
                                <label for="inp2">Представьтесь, пожалуйста</label>
                                <input type="text" id="inp2" class="validate__error">
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="question__btn"><img src="dist/img/mail-btn.png" alt="">
                                Отправить
                            </button>
                            <span class="question__btn--txt">Нажимая кнопку вы даете согласие на обработку персональных данных</span>
                        </div>

                    </form>
                </div>
                <div class="news">
                    <div class="block-title">Новости компании</div>
                    <div class="news__list">
                        <?php foreach (range(0, 5) as $item) { ?>
                            <div class="news__item--wrap">
                                <div class="news__item">
                                    <div class="news__item--date muted"><i class="fa fa-calendar"
                                                                           aria-hidden="true"></i> 1
                                        декабря 2018
                                    </div>
                                    <div class="news__item--pic"
                                         style="background-image: url(dist/img/news1.jpg);"></div>
                                    <div class="news__item--title">Шторы на петлях: как выбрать и оформить в инвентаре
                                    </div>
                                    <div class="news__item--intro">Важно знать, что шторы на петлях очень легко
                                        крепятся,
                                        поэтому с каждым годом становятся все больше популярными
                                    </div>
                                    <div class="news__item--btn__wrap">
                                        <a href="#" class="news__item--btn">Читать полностью</a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="about">
                    <div class="block-title">Немного о нас</div>
                    <div class="about__intro">
                        Оригинальные австрийские шторы при подъеме образуют утонченные фестоны, которые в сочетании с
                        однотонными тканями смотрятся достаточно стильно, современно и роскошно. Для пошива изделий
                        данного
                        типа зачастую используют светлую ткань с ненавязчивым блеском (органза, искусственный шелк,
                        вуаль,
                        полиэстер, тафта). Красиво и элегантно смотрятся шторы из мягкого бархата и муара
                    </div>
                    <a href="#" class="about__btn">Подробнее о нас</a>
                </div>
            </div>
        </div>
        <?php include 'mmenu.php' ?>
    </div>
    <?php include 'footer.php' ?>
</div>
    <?php include 'scripts.php' ?>
</body>
</html>