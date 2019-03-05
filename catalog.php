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
<div class="main" id="page">
    <div class="top__section">
        <?php include 'header.php'?>
        <div class="container p40">
            <div class="inner">
                <ul class="breadcrumbs">
                    <li><a href="#">Главная</a></li>
                    <li><a href="#">Каталог</a></li>
                    <li><span>Шторы</span></li>
                </ul>
                <div class="catalog">
                    <?php include 'sidebar.php'; ?>
                    <div class="catalog__wrap">
                        <div class="catalog__title">День ночь</div>
                        <div class="catalog__tags">
                            <ul class="catalog__tag">
                                <li class="catalog__tag--item"><a href="#">Детские шторы</a></li>
                                <li class="catalog__tag--item"><a href="#">Для спальни</a></li>
                                <li class="catalog__tag--item"><a href="#">Из льна</a></li>
                                <li class="catalog__tag--item"><a href="#">На петлях</a></li>
                                <li class="catalog__tag--item"><a href="#">Однотонные плотные</a></li>
                                <li class="catalog__tag--item"><a href="#">Блекаут</a></li>
                            </ul>
                            <ul class="catalog__tag">
                                <li class="catalog__tag--item"><a href="#">Шторы для гостинной</a></li>
                                <li class="catalog__tag--item"><a href="#">Шторы на кухню</a></li>
                                <li class="catalog__tag--item"><a href="#">Шторы на люверсах</a></li>
                            </ul>
                        </div>
                        <div class="catalog__items">
                            <?php foreach ( range(1, 9) as $value ) { ?>
                                <div class="catalog__item--wrap">
                                    <div class="catalog__item">
                                        <div class="catalog__item--pic" style="background-image: url(dist/img/item1.jpg);"></div>
                                        <div class="catalog__item--title">Комплект штор 1 Комплект штор 1 Комплект штор 1</div>
                                        <div class="catalog__item--intro">Комплект штор Брауни из светонепроницаемой ткани</div>
                                        <div class="catalog__item--price">
                                            <div class="catalog__item--price__num">64 200 <i class="fa fa-rub" aria-hidden="true"></i></div>
                                            <div class="catalog__item--price__stock"><img src='dist/img/stock.png' alt=""> В наличии</div>
                                        </div>
                                        <a href="#" class="catalog__item--btn catalog__item--btn__add">Добавить в корзину</a>
                                        <a href="#" class="catalog__item--btn catalog__item--btn__click">Купить в один клик</a>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="pagination">
                            <ul class="pagination__list">
                                <li class="pagination__start"><a href="#"><img src="dist/img/pag-left.png" alt=""></a> </li>
                                <?php foreach ( range(1, 9) as $value ) { ?>
                                    <li><a href="#"><?= $value ?></a></li>
                                <?php } ?>
                                <li class="pagination__current"><a href="#">10</a></li>
                                <li class="pagination__end"><a href="#"><img src="dist/img/pag-right.png" alt=""></a> </li>
                            </ul>
                        </div>
                        <div class="about">
                            <div class="block-title">Немного о нас</div>
                            <div class="about__intro">
                                Оригинальные австрийские шторы при подъеме образуют утонченные фестоны, которые в сочетании с однотонными тканями смотрятся достаточно стильно, современно и роскошно. Для пошива изделий данного типа зачастую используют светлую ткань с ненавязчивым блеском (органза, искусственный шелк, вуаль, полиэстер, тафта). Красиво и элегантно смотрятся шторы из мягкого бархата и муара
                            </div>
                            <a href="#" class="about__btn">Подробнее о нас</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'mmenu.php' ?>
    </div>
    <?php include 'footer.php'?>
</div>
    <?php include 'scripts.php'?>
</body>
</html>