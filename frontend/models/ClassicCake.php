<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ClassicCake extends Model
{
    //user data
    public $biscuit;
    public $cream;
    public $filling;
    public $comment;
    public $images;
    public $weight;

    //cake builder data
    public function biscuitItems()
    {
        return [
            'Ванильный',
            'Шоколадный',
            'Красный бархат',
            'Бисквит королевы Виктории',
            'Пряный банановый',
            'Кокосовый',
            'Морковный с орехами',
        ];
    }

    public function creamItems()
    {
        return [
            'Ванильный',
            'Шоколадный',
        ];
    }

    public function fillingItems()
    {
        return [
            'Фрукты' => [
                'Киви',
                'Банан',
                'Ананас',
                'Груша',
                'Апельсин',
            ],
            'Орехи' => [
                'Грецкий',
                'Кешью',
                'Фундук',
            ],
            'Конфитюр' => [
                'Клубничный',
                'Смородиновый',
                'Вишневый',
                'Черничный',
            ],
            'Ганаш' => [
                'Темный',
                'Молочный',
                'Белый',
            ],
            'Другое' => [
                'Карамель',
            ],
        ];
    }

    //cake validation
    public function rules()
    {
        return [
            [['biscuit', 'cream', 'filling', 'comment', 'weight'], 'required', 'message' => 'Это поле нужно заполнить'],
            [['biscuit', 'cream', 'weight'], 'integer'],
            [['biscuit', 'cream', 'weight'], 'filter', 'filter' => function($value){
                return (int)$value;
            }],
            ['filling', 'filter', 'filter' => function($array){
                foreach ($array as &$value) {
                    $value = (int)$value;
                }
                return $array;
            }],
            ['comment', 'string', 'max' => 2000, 'message' => 'Не может содержать больше 2000 символов'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [];
    }

}
