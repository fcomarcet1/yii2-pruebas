<?php

namespace app\controllers;

use yii;
use yii\web\Controller;
use app\models\CalculatorForm;

class HomeController extends Controller
{
    // http://library.test/index.php?r=home/index
    public function actionIndex()
    {
        return $this->render('index');
    }

    // http://library.test/index.php?r=home%2Fsay&message=manolo
    public function actionSay(string $message = 'default Hello')
    {
        return $this->render('say', ['message' => $message]);
    }

    public function actionCalculator()
    {
        $model = new CalculatorForm;

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // valid data received in $model
            // do something meaningful here about $model ...
            $message = sprintf('El resultado es : %d', $model->sumNumbers());

            return $this->render('calculator-result', ['model' => $model, 'message' => $message]);
        }

        // either the page is initially displayed or there is some validation error
        return $this->render('calculator', [
            'model' => $model,
            'errors' => $model->errors
        ]);

        // Manera mas optimizada
        /*
            $model = new \app\models\ContactForm();

            // populate model attributes with user inputs
            $model->load(\Yii::$app->request->post());
            // which is equivalent to the following:
            // $model->attributes = \Yii::$app->request->post('ContactForm');

            if ($model->validate()) {
                // all inputs are valid
                 return $this->render('calculator-result', ['model' => $model]);
            } else {
                // validation failed: $errors is an array containing error messages
                $errors = $model->errors;
            }
        */


    }




}
