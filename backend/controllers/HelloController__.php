<?php


namespace backend\controllers;


use yii\web\Controller;

class HelloController__ extends Controller
{
  public function actionIndex(): string
  {
    return $this->render('index');
  }
}