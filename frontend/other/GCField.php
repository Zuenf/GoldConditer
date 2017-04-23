<?php

namespace frontend\other;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;

class GCField extends Widget
{
    /**
     * @param string        $type    Type of input tag
     * @param string        $name    Name attribute for textarea
     * @param string|object $value   Value or Model object for take value
     * @param array         $options Attributes for input tag
     */
    public static function text($type, $name, $value, $options) {
        $options = array_merge([
            'class' => 'text-field',
        ], $options);

        if (is_object($value)) {
            echo Html::activeInput($type, $value, $name, $options);
        } else {
            echo Html::input($type, $name, $value, $options);
        }
    }

    /**
     * @param string        $name    Name attribute for textarea
     * @param string|object $value   Value or Model object for take value
     * @param array         $options Attributes for textarea tag
     */
    public static function textarea($name, $value, $options) {
        $options = array_merge([
            'class' => 'text-field text-field_textarea',
        ], $options);
        
        if (is_object($value)) {
            echo Html::activeTextarea($value, $name, $options);
        } else {
            echo Html::textarea($name, $value, $options);
        }
    }

    /**
     * @param array $options {
     * @var string $name Name attribute for input
     * @var string $value Value attribute for input
     * @var bool   $checked Is checked input
     * @var string $imageSrc Image SRC attribute
     * @var string $imageAlt Image Alt attribute
     * @var string $label Label-Text
     * @var string $type Type of block
     * }
     */
    public static function radio($options)
    {
        self::checkInput('radio', $options);
    }


    /**
     * @param array $options {
     * @var string $name Name attribute for input
     * @var string $value Value attribute for input
     * @var bool   $checked Is checked input
     * @var string $imageSrc Image SRC attribute
     * @var string $imageAlt Image Alt attribute
     * @var string $label Label-Text
     * @var string $type Type of block
     * }
     */
    public static function checkbox($options)
    {
        self::checkInput('checkbox', $options);
    }


    /**
     *
     * @param string $type "radio" or "checkbox"
     * @param array $options {
     * @var string $name Name attribute for input
     * @var string $value Value attribute for input
     * @var bool   $checked Is checked input
     * @var string $imageSrc Image SRC attribute
     * @var string $imageAlt Image Alt attribute
     * @var string $label Label-Text
     * @var string $type Type of block
     * }
     */
    public static function checkInput($type, $options)
    {
        $options = array_merge([
            'type' => 'type-one',
            'imageAlt' => 'GoldConditer.ru',
        ], $options);

        $html = '<label class="custom-input custom-input_' . $type . ' custom-input_' . $type . '_' . $options['type'] . '">
                    <input class="custom-input__orig" type="' . $type . '"';

        if (!empty($options['name'])) {
            $html .= ' name="' . $options['name'] . '"';
        }

        if (!empty($options['value'])) {
            $html .= ' value="' . $options['value'] . '"';
        }

        if (!empty($options['checked'])) {
            $html .= ' checked';
        }

        $html .= '>
            <span class="custom-input__view">';

        if (!empty($options['imageSrc'])) {
            $html .= '<span class="custom-input__img-wrap">
                            <img class="custom-input__img"
                                 src="' . $options['imageSrc'] . '"
                                 alt="' . $options['imageAlt'] . '">
                        </span>';
        }

        if (!empty($options['label'])) {
            $html .= '<span class="custom-input__label">' . $options['label'] . '</span>';
        }

        $html .= '</span></label>';

        echo $html;
    }
}
