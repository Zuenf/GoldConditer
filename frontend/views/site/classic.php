<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use \frontend\other\GCField;

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
    <?= Html::beginForm(['classic'], 'post', ['class' => 'product__form']) ?>
    <div class="list list_numbers">
        <div class="list__item">
            <div class="list__item-title">Выберите бисквит для торта</div>
            <div class="list__item-content">
                <div class="inline-group">
                    <?= Yii::$app->front->render('blocks/checkList', [
                        'list' => $cake->biscuitItems(),
                        'current' => $cake->biscuit,
                        'name' => 'biscuit',
                        'type' => 'radio'
                    ]); ?>
                </div>
            </div>
        </div>
        <div class="list__item">
            <div class="list__item-title">Выберите крем для торта</div>
            <div class="list__item-content">
                <div class="inline-group">
                    <?= Yii::$app->front->render('blocks/checkList', [
                        'list' => $cake->creamItems(),
                        'current' => $cake->cream,
                        'name' => 'cream',
                        'type' => 'radio'
                    ]); ?>
                </div>
            </div>
        </div>
        <div class="list__item">
            <div class="list__item-title">Выберите начинки для торта
                <div class="list__item-title-small">не более пяти</div>
            </div>
            <div class="list__item-content" data-max-checked="5">
                <?= Yii::$app->front->render('blocks/checkList', [
                    'list' => $cake->fillingItems(),
                    'current' => $cake->filling,
                    'name' => 'filling[]',
                    'type' => 'checkbox'
                ]); ?>
            </div>
        </div>
        <div class="list__item">
            <div class="list__item-title">Расскажите каким вы видите торт</div>
            <div class="list__item-content">
                <?php GCField::textarea('comment', $cake, ['placeholder' => 'Как оформить торт??']); ?>
                <div class="inline-group">
                    <label class="custom-input custom-input_file custom-input_file_type-one">
                        <input type="file" class="custom-input__orig" name="images" multiple
                               accept="image/*,image/jpeg,image/png">
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
                <label class="custom-input custom-input_number custom-input_number_type-one" data-step="500"
                       data-max="7000" data-min="1500">
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
    <?= Html::endForm() ?>
</div>