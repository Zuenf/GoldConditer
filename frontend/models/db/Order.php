<?php

namespace frontend\models\db;

use Yii;
use yii\db\ActiveRecord;

/**
 * ContactForm is the model behind the contact form.
 */
class Order extends ActiveRecord
{
    public $name;
    public $email;
    public $subject;
    public $body;
    public $verifyCode;


    public static function tableName()
    {
        return '{{orders}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email', 'phone', 'date'], 'required', 'message' => 'Это поле нужно заполнить'],
            ['email', 'email', 'message' => 'Неправильный E-mail'],
            ['date', 'date', 'message' => 'Неправильная дата'],
            ['phone', 'udokmeci\yii2PhoneValidator\PhoneValidator','country'=>'RU', 'message' => 'Неправильный номер телефона'],
            ['name', 'string', 'max' => 70,  'message' => 'Имя не может содержать больше 70 символов'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'email' => 'E-mail',
            'phone' => 'Телефон',
            'date' => 'Дата',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param string $email the target email address
     * @return bool whether the email was sent
     */
    public function sendEmail($email)
    {
        return Yii::$app->mailer->compose()
            ->setTo($email)
            ->setFrom([$this->email => $this->name])
            ->setSubject($this->subject)
            ->setTextBody($this->body)
            ->send();
    }
}
