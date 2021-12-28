<?php

namespace app\models;

use Yii;
use yii\base\Model;

class CalculatorForm extends Model
{
    public $firstNumber;
    public $secondNumber;

    public function rules()
    {
        return [
            [['firstNumber', 'secondNumber'], 'required'],
            ['firstNumber', 'number'],
            ['secondNumber', 'number'],
            ['firstNumber', 'compare', 'compareValue' => 0, 'operator' => '>'],
            ['secondNumber', 'compare', 'compareValue' => 0, 'operator' => '>'],

        ];
    }

    public function sumNumbers()
    {
        return $this->firstNumber + $this->secondNumber;
    }

}