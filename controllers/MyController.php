<?php

namespace app\controllers;

use yii\web\Controller;

class MyController extends Controller
{
    public function actionIndex($id = null)
    {
        $hi = 'Hello world';
        $names = ['Victor', 'Daniel', 'Alex'];

        if(!$id) $id = 'test';

        return $this->render('index', compact('hi','names', 'id'));

    }

}