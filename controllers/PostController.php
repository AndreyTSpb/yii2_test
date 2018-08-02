<?php

namespace app\controllers;

class PostController extends AppController{
    public function actionIndex($name = false, $age = false){
        $hello = 'Hello Word!!!';
        $hi = 'Hi, '.$name. ' '.$age;
        return $this->render('index.php', ['hello' => $hello, 'hi' => $hi]);
    }
}