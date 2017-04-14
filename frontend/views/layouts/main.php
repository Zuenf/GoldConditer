<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html class="no-js" lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>

    <!--<link rel="stylesheet" href="css/main.css">-->
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    <!--[if lt IE 8]>
    <p class="browserupgrade">
        Вы используете <strong>устаревший</strong> браузер. Пожалуйста <a href="http://browsehappy.com/">обновите ваш браузер</a> для удобного использования сайта.
    </p>
    <![endif]-->

    <div class="page">
        <div class="page__sidebar">
            <?= Yii::$app->front->render('blocks/sidebar'); ?>
        </div>
        <div class="page__main">
            <div class="page__main-inner">
                <!--<h1 class="page__title"><span class="page__title-inner">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, ullam.</span></h1>-->
                <div class="page__content page__content_sheet">
                    <?= $content ?>
                </div>
            </div>
        </div>
    </div>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>