<?php

namespace app\models;

use yii\base\Model;


class MessageForm extends Model
{

    public $id;
    public $text;
    public function rules()
    {
        return [
            [['id', 'text'], 'required'],
        ];
    }
}