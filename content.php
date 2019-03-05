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
                <div class="content__title">Шторы</div>
                <div class="content__page">
                    <img src="dist/img/content-pic.jpg" alt="" style="float:left; margin-right: 35px; margin-bottom: 25px;">
                    <p>Французские шторы являются отождествлением роскоши, и подойдут для оформле-ния помещений, выполненных в любом стиле.Также широкое распространение получили римские шторы. </p>
                    <p>Они представляют собой полосу ткани, которая натянута на жесткую конструкцию. Для изготовления римских штор используют исключитель- но плотные ткани. Примечательно, что крепления для такой драпировки могут быть изготовлены из липучки. </p>
                    <p>Ещё есть итальянские шторы. Они не раздвигаются, так как их плотно закрепляют на карнизе или непосредственно на окне. Итальянские шторы подойдут для владельцев длинных окон.</p>
                    <p>Также бывают рулонные шторы. Их механизм достаточно простой, благодаря чему такая драпировка служит в течение длительного срока, и редко выходит из строя. </p>
                    <p>Обычно рулонные шторы изготавливаются из двух слоёв светозащитного материала, что позволяет при желании изолировать помещение от солнечного света. </p>
                    <p>Ухаживать за такой драпировкой достаточно просто.</p>
                    <p>Нам интересно развиваться и предлагать новые решения по обустройству окон ваших спален, гостиных, кухонь и детских комнат. Все ткани нашей большой коллекции выбираются профессиональными дизайнерами. Мы сотрудничаем исключительно с надежными и уже проверенными партнерами, что практически исключает брак в сырье и сокращает сроки поставки. В каталоге представлено множество модных моделей текстильной продукции. Он обновляется и пополняется новыми товарами ежедневно.</p>
                    <p>Кроме текстильного оформления окон, мы уделяем большое внимание фурнитуре, без которой нельзя представить законченный интерьер. Предлагаемые кисти, подхваты (двойные, одинарные) и магниты для штор только от лучших производителей и высокого качества.</p>
                    <p>Наша компания производит доставку товаров по всей территории страны при помощи курьерских служб DPD, EMS, а также Почты РФ и автоматизированных терминалов (постаматов) PickPoint. Причем в некоторые населенные пункты курьерская доставка возможна на следующий рабочий день после оформления покупки.</p>
                    <p>Мы всегда будем рады помочь вам обустроить любой интерьер на самом высоком уровне. Ждем ваших заказов!</p>
                </div>
                <div class="question">
                    <div class="question__title">Остались вопросы?</div>
                    <div class="question__intro">Если у Вас остались вопросы — заполните форму и наши специалисты свяжутся с Вами ближайшее время</div>
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
                            <button type="submit" class="question__btn"><img src="dist/img/mail-btn.png" alt=""> Отправить</button>
                            <span class="question__btn--txt">Нажимая кнопку вы даете согласие на обработку персональных данных</span>
                        </div>

                    </form>
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