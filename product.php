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
                <div class="product__title">Штора на тесьме арт. 7110.5т</div>
                <div class="product">
                    <div class="product__left">
                        <div class="product__slider">
                            <?php foreach (range(0, 5) as $item) { ?>
                                <div class="product__slider--pic">
                                    <div class="product__slider--pic__inner" style="background-image:url(dist/img/product.jpg);"></div>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="product__slider--nav">
                            <?php foreach (range(0, 5) as $item) { ?>
                            <div class="product__slider--nav__link">
                                <div class="product__slider--nav__inside" style="background-image: url(dist/img/product.jpg);"></div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="product__right">
                        <div class="product__info">
                            <div class="product__info--row">
                                <div class="product__info--char">
                                    <span class="param muted">Артикул: </span>
                                    <span class="param__article">159731-567</span>
                                    <span class="param__stock"><img src="dist/img/stock.png" alt=""> в наличии</span>
                                </div>
                            </div>
                            <div class="product__info--row">
                                <div class="product__info--char">
                                    <span class="param muted">Цена: </span>
                                    <span class="old__price">64 200 <i class="fa fa-rub" aria-hidden="true"></i></span>
                                    <span class="new__price">64 200 <i class="fa fa-rub" aria-hidden="true"></i></span>
                                </div>
                            </div>
                            <div class="product__info--row">
                                <div class="product__info--char">
                                    <span class="param muted">Материал: </span>
                                    <span>Габардин</span>
                                </div>
                            </div>
                            <div class="product__info--row">
                                <div class="product__info--char product__info--char__ms">
                                    <span class="param muted">Ширина (см): </span>
                                    <div class="custom__select">
                                        <select class="fancy__select">
                                            <option>200</option>
                                            <option>300</option>
                                            <option>400</option>
                                            <option>500</option>
                                        </select>
                                    </div>
                                    <span class="muted height__param">Высота (см): </span>
                                    <div class="custom__select">
                                        <select class="fancy__select">
                                            <option>200</option>
                                            <option>300</option>
                                            <option>400</option>
                                            <option>500</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="product__info--row">
                                <div class="product__info--char product__info--char__ms">
                                    <span class="param muted">Тип крепления: </span>
                                    <select class="fancy__select">
                                        <option>Шторная тесьма</option>
                                        <option>Шторная тесьма</option>
                                        <option>Шторная тесьма</option>
                                        <option>Шторная тесьма</option>
                                        <option>Шторная тесьма</option>
                                    </select>
                                </div>
                            </div>
                            <div class="product__info--checkbox">
                                <input type="checkbox" class="checkbox checkbox__show--param" id="checkbox1"/>
                                <label for="checkbox1">Индивидуальный размер штор</label>
                                <div class="input__group d-none" id="hidden__param">
                                    <div class="input__col input__col--w20">
                                        <label for="inp1">Шиина (см)</label>
                                        <input type="text" class="input__style">
                                    </div>
                                    <div class="input__col input__col--w20">
                                        <label for="inp1">Высота (см)</label>
                                        <input type="text" class="input__style">
                                    </div>
                                    <div class="input__col input__col--w60">
                                        <label for="">Тип крепелния</label>
                                        <select class="fancy__select">
                                            <option>Шторная тесьма</option>
                                            <option>Шторная тесьма</option>
                                            <option>Шторная тесьма</option>
                                            <option>Шторная тесьма</option>
                                            <option>Шторная тесьма</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="product__info--checkbox">
                                <input type="checkbox" class="checkbox" id="checkbox2" />
                                <label for="checkbox2">Монтаж штор (для жителей Санкт-Петербурга)</label>
                            </div>
                            <div class="param__buttons">
                                <a href="#" class="param--btn param--btn__add">Добавить в корзину</a>
                                <a href="#" class="param--btn param--btn__click">Купить в один клик</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product__tabs">
                    <div class="tabs">
                        <div class="tab_btn clearfix">
                            <ul class="nav-tabs">
                                <li class="active"><a href="#home" data-toggle="tab">Описание</a></li>
                                <li><a href="#recomendation" data-toggle="tab">Рекомендации по уходу </a></li>
                                <li><a href="#delivery" data-toggle="tab">Доставка</a></li>
                                <li><a href="#return" data-toggle="tab">Возврат</a></li>
                            </ul>
                        </div>
                        <!-- Tab panes -->
                        <div class="tab-content clearfix">
                            <div class="tab-pane active clearfix" id="home">
                                <p>Французские шторы являются отождествлением роскоши, и подойдут для оформле-ния помещений, выполненных в любом стиле.Также широкое распространение получили римские шторы. Они представляют собой полосу ткани, которая натянута на жесткую конструкцию. Для изготовления римских штор используют исключитель- но плотные ткани. Примечательно, что крепления для такой драпировки могут быть изготовлены из липучки.
                                    Ещё есть итальянские шторы. Они не раздвигаются, так как их плотно закрепляют на карнизе или непосредственно на окне. Итальянские шторы подойдут для владельцев длинных окон.</p>
                                    <p>Также бывают рулонные шторы. Их механизм достаточно простой, благодаря чему такая драпировка служит в течение длительного срока, и редко выходит из строя.</p>
                                    <p>Обычно рулонные шторы изготавливаются из двух слоёв светозащитного материала, что позволяет при желании изолировать помещение от солнечного света.</p>

                                    <p>Ухаживать за такой драпировкой достаточно просто.</p>
                            </div>
                            <div class="tab-pane" id="recomendation">
                                <p>Французские шторы являются отождествлением роскоши, и подойдут для оформле-ния помещений, выполненных в любом стиле.Также широкое распространение получили римские шторы. Они представляют собой полосу ткани, которая натянута на жесткую конструкцию. Для изготовления римских штор используют исключитель- но плотные ткани. Примечательно, что крепления для такой драпировки могут быть изготовлены из липучки.
                                    Ещё есть итальянские шторы. Они не раздвигаются, так как их плотно закрепляют на карнизе или непосредственно на окне. Итальянские шторы подойдут для владельцев длинных окон.</p>
                                <p>Также бывают рулонные шторы. Их механизм достаточно простой, благодаря чему такая драпировка служит в течение длительного срока, и редко выходит из строя.</p>
                                <p>Обычно рулонные шторы изготавливаются из двух слоёв светозащитного материала, что позволяет при желании изолировать помещение от солнечного света.</p>
                            </div>
                            <div class="tab-pane" id="delivery">
                                <p>Французские шторы являются отождествлением роскоши, и подойдут для оформле-ния помещений, выполненных в любом стиле.Также широкое распространение получили римские шторы. Они представляют собой полосу ткани, которая натянута на жесткую конструкцию. Для изготовления римских штор используют исключитель- но плотные ткани. Примечательно, что крепления для такой драпировки могут быть изготовлены из липучки.
                                    Ещё есть итальянские шторы. Они не раздвигаются, так как их плотно закрепляют на карнизе или непосредственно на окне. Итальянские шторы подойдут для владельцев длинных окон.</p>
                                <p>Также бывают рулонные шторы. Их механизм достаточно простой, благодаря чему такая драпировка служит в течение длительного срока, и редко выходит из строя.</p>
                                <p>Обычно рулонные шторы изготавливаются из двух слоёв светозащитного материала, что позволяет при желании изолировать помещение от солнечного света.</p>
                            </div>
                            <div class="tab-pane" id="return">
                                <p>Французские шторы являются отождествлением роскоши, и подойдут для оформле-ния помещений, выполненных в любом стиле.Также широкое распространение получили римские шторы. Они представляют собой полосу ткани, которая натянута на жесткую конструкцию. Для изготовления римских штор используют исключитель- но плотные ткани. Примечательно, что крепления для такой драпировки могут быть изготовлены из липучки.
                                    Ещё есть итальянские шторы. Они не раздвигаются, так как их плотно закрепляют на карнизе или непосредственно на окне. Итальянские шторы подойдут для владельцев длинных окон.</p>
                                <p>Также бывают рулонные шторы. Их механизм достаточно простой, благодаря чему такая драпировка служит в течение длительного срока, и редко выходит из строя.</p>
                                <p>Обычно рулонные шторы изготавливаются из двух слоёв светозащитного материала, что позволяет при желании изолировать помещение от солнечного света.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product__same">
                    <div class="catalog__title">Новинки</div>
                    <div class="catalog__items">
                        <?php foreach ( range(1, 4) as $value ) { ?>
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
                </div>
                <div class="catalog__related">
                    <div class="catalog__title">Сопутствующие товары</div>
                    <div class="related">
                        <?php foreach ( range(1, 4) as $value ) { ?>
                        <div class="related__item--wrap">
                            <div class="related__item">
                                <div class="related__item--pic" style="background-image: url(dist/img/related.jpg);"></div>
                                <div class="related__item--title">Кисти</div>
                                <div class="related__item--intro">
                                    Текстильные декоративные элементы для оконных проемов отличается большим
                                    разнообразием
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="catalog__stat">
                    <div class="catalog__stat--title"><span>Наши преимущества</span></div>
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
        </div>
        <?php include 'mmenu.php' ?>
    </div>
    <?php include 'footer.php' ?>
</div>
<?php include 'scripts.php'?>
</body>
</html>