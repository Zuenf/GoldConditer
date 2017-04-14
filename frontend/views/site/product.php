<?php

/* @var $this yii\web\View */

$this->title = 'GoldConditer - авторские торты на заказ';
?>
<div class="product product_single">
    <div class="slider slider_type_one">
        <div class="slider__slide"><img src="https://unsplash.it/400/400?image=556" alt=""></div>
        <div class="slider__slide"><img src="https://unsplash.it/400/400?image=554" alt=""></div>
        <div class="slider__slide"><img src="https://unsplash.it/400/400?image=552" alt=""></div>
        <div class="slider__slide"><img src="https://unsplash.it/400/400?image=550" alt=""></div>
        <div class="slider__slide"><img src="https://unsplash.it/400/400?image=548" alt=""></div>
        <div class="slider__slide"><img src="https://unsplash.it/400/400?image=546" alt=""></div>
    </div>
    <form class="product__form">
        <div class="list list_numbers">
            <div class="list__item">
                <div class="list__item-title">Выберите бисквит для торта</div>
                <div class="list__item-content">
                    <div class="inline-group">
                        <label class="custom-input custom-input_radio custom-input_radio_type-one">
                            <input class="custom-input__orig" type="radio" name="biscuit" value="1">
                            <span class="custom-input__view">Ванильный</span>
                        </label>
                        <label class="custom-input custom-input_radio custom-input_radio_type-one">
                            <input class="custom-input__orig" type="radio" name="biscuit" value="2">
                            <span class="custom-input__view">Шоколадный</span>
                        </label>
                        <label class="custom-input custom-input_radio custom-input_radio_type-one">
                            <input class="custom-input__orig" type="radio" name="biscuit" value="3">
                            <span class="custom-input__view">Красный бархат</span>
                        </label>
                        <label class="custom-input custom-input_radio custom-input_radio_type-one">
                            <input class="custom-input__orig" type="radio" name="biscuit" value="4">
                            <span class="custom-input__view">Бисквит королевы Виктории</span>
                        </label>
                        <label class="custom-input custom-input_radio custom-input_radio_type-one">
                            <input class="custom-input__orig" type="radio" name="biscuit" value="5">
                            <span class="custom-input__view">Пряный банановый</span>
                        </label>
                        <label class="custom-input custom-input_radio custom-input_radio_type-one">
                            <input class="custom-input__orig" type="radio" name="biscuit" value="6">
                            <span class="custom-input__view">Кокосовый</span>
                        </label>
                        <label class="custom-input custom-input_radio custom-input_radio_type-one">
                            <input class="custom-input__orig" type="radio" name="biscuit" value="7">
                            <span class="custom-input__view">Морковный с орехами</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="list__item">
                <div class="list__item-title">Выберите крем для торта</div>
                <div class="list__item-content">
                    <div class="inline-group">
                        <label class="custom-input custom-input_radio custom-input_radio_type-one">
                            <input class="custom-input__orig" type="radio" name="cream" value="1">
                            <span class="custom-input__view">Ванильный</span>
                        </label>
                        <label class="custom-input custom-input_radio custom-input_radio_type-one">
                            <input class="custom-input__orig" type="radio" name="cream" value="2">
                            <span class="custom-input__view">Шоколадный</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="list__item">
                <div class="list__item-title">Выберите начинки для торта <div class="list__item-title-small">не более пяти</div></div>
                <div class="list__item-content" data-max-checked="5">
                    <div class="list__item-subtitle">Фрукты</div>

                    <div class="inline-group">
                        <label class="custom-input custom-input_radio custom-input_radio_type-one">
                            <input class="custom-input__orig" type="checkbox" name="filling" value="1">
                            <span class="custom-input__view">Киви</span>
                        </label>
                        <label class="custom-input custom-input_radio custom-input_radio_type-one">
                            <input class="custom-input__orig" type="checkbox" name="filling" value="2">
                            <span class="custom-input__view">Банан</span>
                        </label>
                        <label class="custom-input custom-input_radio custom-input_radio_type-one">
                            <input class="custom-input__orig" type="checkbox" name="filling" value="2">
                            <span class="custom-input__view">Ананас</span>
                        </label>
                        <label class="custom-input custom-input_radio custom-input_radio_type-one">
                            <input class="custom-input__orig" type="checkbox" name="filling" value="2">
                            <span class="custom-input__view">Груша</span>
                        </label>
                        <label class="custom-input custom-input_radio custom-input_radio_type-one">
                            <input class="custom-input__orig" type="checkbox" name="filling" value="2">
                            <span class="custom-input__view">Апельсин</span>
                        </label>
                    </div>
                    <div class="list__item-subtitle">Орехи</div>
                    <div class="inline-group">
                        <label class="custom-input custom-input_radio custom-input_radio_type-one">
                            <input class="custom-input__orig" type="checkbox" name="filling" value="1">
                            <span class="custom-input__view">Грецкий</span>
                        </label>
                        <label class="custom-input custom-input_radio custom-input_radio_type-one">
                            <input class="custom-input__orig" type="checkbox" name="filling" value="2">
                            <span class="custom-input__view">Кешью</span>
                        </label>
                        <label class="custom-input custom-input_radio custom-input_radio_type-one">
                            <input class="custom-input__orig" type="checkbox" name="filling" value="2">
                            <span class="custom-input__view">Фундук</span>
                        </label>
                    </div>
                    <div class="list__item-subtitle">Конфитюр</div>
                    <div class="inline-group">
                        <label class="custom-input custom-input_radio custom-input_radio_type-one">
                            <input class="custom-input__orig" type="checkbox" name="filling" value="1">
                            <span class="custom-input__view">Клубничный</span>
                        </label>
                        <label class="custom-input custom-input_radio custom-input_radio_type-one">
                            <input class="custom-input__orig" type="checkbox" name="filling" value="2">
                            <span class="custom-input__view">Смородиновый</span>
                        </label>
                        <label class="custom-input custom-input_radio custom-input_radio_type-one">
                            <input class="custom-input__orig" type="checkbox" name="filling" value="2">
                            <span class="custom-input__view">Вишневый</span>
                        </label>
                        <label class="custom-input custom-input_radio custom-input_radio_type-one">
                            <input class="custom-input__orig" type="checkbox" name="filling" value="2">
                            <span class="custom-input__view">Черничный</span>
                        </label>
                    </div>
                    <div class="list__item-subtitle">Ганаш</div>
                    <div class="inline-group">
                        <label class="custom-input custom-input_radio custom-input_radio_type-one">
                            <input class="custom-input__orig" type="checkbox" name="filling" value="1">
                            <span class="custom-input__view">Темный</span>
                        </label>
                        <label class="custom-input custom-input_radio custom-input_radio_type-one">
                            <input class="custom-input__orig" type="checkbox" name="filling" value="2">
                            <span class="custom-input__view">Молочный</span>
                        </label>
                        <label class="custom-input custom-input_radio custom-input_radio_type-one">
                            <input class="custom-input__orig" type="checkbox" name="filling" value="2">
                            <span class="custom-input__view">Белый</span>
                        </label>
                    </div>
                    <div class="list__item-subtitle">Другое</div>
                    <div class="inline-group">
                        <label class="custom-input custom-input_radio custom-input_radio_type-one">
                            <input class="custom-input__orig" type="checkbox" name="filling" value="1">
                            <span class="custom-input__view">Карамель</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="list__item">
                <div class="list__item-title">Расскажите каким вы видите торт</div>
                <div class="list__item-content">
                    <textarea class="text-field text-filed_textarea" name="comment" placeholder="Как оформить торт?"></textarea>
                    <div class="inline-group">
                        <label class="custom-input custom-input_file custom-input_file_type-one">
                            <input type="file" class="custom-input__orig" name="images" multiple accept="image/*,image/jpeg,image/png">
												<span class="custom-input__view">
													<span class="custom-input__icon"><i class="js-svg_img"></i></span>
													<span class="custom-input__text">Прикрепить изображения</span>
												</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="list__item">
                <div class="list__item-title">Укажите вес торта</div>
                <div class="list__item-content">
                    <label class="custom-input custom-input_number custom-input_number_type-one" data-step="500" data-max="7000" data-min="1500">
                        <input type="hidden" class="custom-input__orig" name="weight" value="1500">
											<span class="custom-input__view">
												<span class="custom-input__text">
													<span class="custom-input__value">1500</span>
													<span class="custom-input__value-of">г</span>
												</span>
												<span class="custom-input__arrows">
													<span class="custom-input__arrow custom-input__arrow_up"></span>
													<span class="custom-input__arrow custom-input__arrow_down"></span>
												</span>
											</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="product__footer">
            <div class="product__price">8000 р.</div>
            <button class="product__footer-btn btn btn_simple">Добавить в корзину</button>
            <button class="product__footer-btn btn btn_simple">Заказать сейчас</button>
        </div>
    </form>
</div>