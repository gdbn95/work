<?php

namespace app\controllers;
use app\models\User;

class SignupController extends \yii\web\Controller
{
    public function actionIndex()
    {
       $model = new User();
    	return $this->render('index',['model'=>$model]);
    }

}
