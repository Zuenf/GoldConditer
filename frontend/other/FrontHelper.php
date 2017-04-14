<?php

namespace app\other;

use Yii;
use yii\helpers\HtmlPurifier;

class FrontHelper extends Helper {

    /*------------------------------------------------------------------
        Render View Helpers
    ------------------------------------------------------------------*/
    public static function render($view, $data = []) {
        return Yii::$app->view->render('@app/views/site/'.$view, $data);
    }

    public static function viewExists($view) {
        return is_file(Yii::getAlias('@app').'/views/site/'.$view.'.php');
    }

    /*public static function getImageLink($imageName){
        return ImagesHelper::getImageLink($imageName);
    }

    public static function getThumb($imageName, $width, $height, $cut = true){
        //$imageInfo = pathinfo($imageUrl);
        return ImagesHelper::getThumbUrlOrCreate($imageName, $width, $height, $cut);
    }*/

}
