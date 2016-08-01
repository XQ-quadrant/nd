<?php

namespace backend\modules\rest\controllers;
use yii\rest\ActiveController;

class ChatController extends \yii\web\Controller
{
    public $modelClass = 'dektrium\user\models\User';

    public function actionIndex()
    {

        return $this->render('index');
    }

}
