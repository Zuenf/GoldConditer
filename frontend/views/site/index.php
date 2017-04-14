<?php

/* @var $this yii\web\View */

$this->title = 'GoldConditer - авторские торты на заказ';
?>
<div class="product product_single">
    <div class="product__header">
        <div class="product__title"><span
                class="product__title-inner">ТОРТ С ВИШНЕЙ И КРЕМОМ<br>ИЗ СЫРА МАСКАРПОНЕ</span></div>
        <img class="product__thumb" src="https://unsplash.it/400/400?image=369" alt="Product Title">
        <img src="https://unsplash.it/400/400?image=336" alt="" class="product__img">
        <img src="https://unsplash.it/400/400?image=338" alt="" class="product__img">
    </div>
    <p class="product__desc">Это сырный муссовый торт на тонкой вафельной основе. Его вкус достаточно нежный, но сам
        торт сытный, за один раз съесть его много вряд ли получится. Часто у наших клиентов, которые никогда его не
        пробовали, возникает вопрос: «На что он похож?». С уверенностью скажу, что если вы никогда не пробовали Чизкейк,
        то сравнить его просто не с чем, у него свой, неповторимый нежный вкус.</p>
    <form class="product__form">
        <div class="list list_numbers">
            <div class="list__item">
                <div class="list__item-title">Выберите форму</div>
                <div class="list__item-content">
                    <div class="inline-group">
                        <label class="custom-radio">
                            <input class="custom-radio__orig" type="radio" name="shape" value="1">
                            <span class="custom-radio__view">
                                <span class="custom-radio__img-wrap">
                                    <img class="custom-radio__img"
                                         src="https://unsplash.it/150/150?image=435"
                                         alt="">
                                </span>
                                <span class="custom-radio__label">1500 г.</span>
                            </span>
                        </label>
                        <label class="custom-radio custom-radio_one">
                            <input class="custom-radio__orig" type="radio" name="shape" value="2">
                                <span class="custom-radio__view">
                                    <span class="custom-radio__img-wrap">
                                        <img class="custom-radio__img"
                                             src="https://unsplash.it/150/150?image=543"
                                             alt="">
                                    </span>
                                    <span class="custom-radio__label">1600 г.</span>
                                </span>
                        </label>
                        <label class="custom-radio custom-radio_one">
                            <input class="custom-radio__orig" type="radio" name="shape" value="3">
                                <span class="custom-radio__view">
                                    <span class="custom-radio__img-wrap">
                                        <img class="custom-radio__img"
                                             src="https://unsplash.it/150/150?image=213"
                                             alt="">
                                    </span>
                                    <span class="custom-radio__label">1800 г.</span>
                                </span>
                        </label>
                        <label class="custom-radio custom-radio_one">
                            <input class="custom-radio__orig" type="radio" name="shape" value="4">
                                <span class="custom-radio__view">
                                    <span class="custom-radio__img-wrap">
                                        <img class="custom-radio__img"
                                             src="https://unsplash.it/150/150?image=124"
                                             alt="">
                                    </span>
                                    <span class="custom-radio__label">1700 г.</span>
                                </span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="list__item">
                <div class="list__item-title">Выберите тип глазури</div>
                <div class="list__item-content">
                    <div class="inline-group">
                        <label class="custom-radio">
                            <input class="custom-radio__orig" type="radio" name="glaze" value="1">
                            <span class="custom-radio__view">
                                <span class="custom-radio__label">Велюр</span>
                            </span>
                        </label>
                        <label class="custom-radio">
                            <input class="custom-radio__orig" type="radio" name="glaze" value="2">
                            <span class="custom-radio__view">
                                <span class="custom-radio__label">Зеркальная</span>
                            </span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="list__item">
                <div class="list__item-title">Ваши пожелания</div>
                <div class="list__item-content"><textarea class="text-field text-filed_textarea" name="comment"
                                                          placeholder="Как оформить торт?"></textarea></div>
            </div>
        </div>
        <div class="product__footer">
            <div class="product__price">8000 р.</div>
            <button class="product__footer-btn btn btn_simple">Добавить в корзину</button>
            <button class="product__footer-btn btn btn_simple">Заказать сейчас</button>
        </div>
    </form>
</div>
