<?php

namespace frontend\other;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;

class GCFormWidget extends Widget
{
    public function init()
    {
        parent::init();
    }

    public function radio($options){
        $html = '<label class="custom-radio custom-radio_one">
                    <input class="custom-radio__orig" type="radio"';

        if (!empty($options['name'])) {
            $html .= ' name="'.$options['name'].'"';
        }

        if (!empty($options['value'])) {
            $html .= ' value="'.$options['value'].'"';
        }

        if (!empty($options['checked'])) {
            $html .= ' checked';
        }

        $html .= '>
            <span class="custom-radio__view">';

        if (!empty($options['image'])) {
            $html .= '<span class="custom-radio__img-wrap">
                            <img class="custom-radio__img"
                                 src="'.$options['image'].'"
                                 alt="GoldConditer.ru">
                        </span>';
        }

        if (!empty($options['label'])) {
            $html .= '<span class="custom-radio__label">'.$options['label'].'</span>';
        }

        $html .= '</span></label>';

        echo $html;
    }

    public function run()
    {
        return '';
    }
}
