<div class="sidebar">
    <div class="sidebar__title">Подбор штор</div>
    <div class="sidebar__mobile--param">Фильтры <i class="fa fa-angle-down" aria-hidden="true"></i></div>
    <div class="sidebar__mobile--wrap">
        <div class="sidebar__row">
            <div class="range__slider--title list-title">Цена</div>
            <div class="range__slider">
                <div id="range__slider"></div>
                <div class="range__slider--limit">
                    <div class="range__slider--min">1000 <i class="fa fa-rub" aria-hidden="true"></i></div>
                    <div class="range__slider--max">900 000 <i class="fa fa-rub" aria-hidden="true"></i></div>
                </div>
            </div>
        </div>
        <div class="sidebar__row">
            <div class="category__title list-title">Применение</div>
            <ul class="category__list">
                <li><a href="">На окна</a></li>
                <li><a href="">На кухню</a></li>
                <li class="category__list--current"><a href="">Для ванной</a></li>
                <li><a href="">В гостинную</a></li>
                <li><a href="">В комнату</a></li>
                <li><a href="">В спальню</a></li>
                <li><a href="">В детскую</a></li>
            </ul>
            <a href="#" class="category__more"><i class="fa fa-eye" aria-hidden="true"></i> Показать больше</a>
        </div>
        <div class="sidebar__row">
            <div class="category__title list-title">Материал штор</div>
            <ul class="category__list">
                <li><a href="">Шелковые</a></li>
                <li><a href="">Льняные</a></li>
                <li class="category__list--current"><a href="">Бархатные</a></li>
            </ul>
            <a href="#" class="category__more"><i class="fa fa-eye" aria-hidden="true"></i> Показать больше</a>
        </div>
        <?php $color__set = ['Белый' => '#fff', '#f598cc', '#c5de9e', '#f48e5c', '#8494c8', '#b7b7b7', '#ef6e7e', '#71b1c9', '#fff69f', '#488dc8', '#c7b29b', '#fc6554']; ?>
        <div class="sidebar__row">
            <div class="category__title list-title">Материал штор</div>
            <div class="color__pick">
                <?php foreach ($color__set as $key => $value) { ?>
                    <div class="color__pick--item__wrap">
                        <div class="color__pick--item" style="background: <?= $value ?>;">
                            <a href="#" class="color__pick--tooltip"><?= $key ?></a>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <a href="#" class="category__more"><i class="fa fa-eye" aria-hidden="true"></i> Показать больше</a>
        </div>
        <div class="sidebar__row">
            <div class="category__title list-title">Стиль штор</div>
            <ul class="category__list">
                <li><a href="">Прованс</a></li>
                <li><a href="">Римские</a></li>
                <li class="category__list--current"><a href="">Японские</a></li>
                <li><a href="">Французкие</a></li>
                <li><a href="">Австрийские</a></li>
                <li><a href="">Классические</a></li>
                <li><a href="">Современные</a></li>
            </ul>
            <a href="#" class="category__more"><i class="fa fa-eye" aria-hidden="true"></i> Показать больше</a>
        </div>
    </div>
</div>