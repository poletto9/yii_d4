<?php

namespace app\controllers;

class First1Controller extends \yii\web\Controller
{
    public function actionIndex()
    {

        $arr = [
            ['fname' => 'สมชาย', 'lname' => 'ใจดี', 'email' => 'som@hotmail.com'],
            ['fname' => 'สมหญิง', 'lname' => 'ใจงาม', 'email' => 'ying@hotmail.com'],
            ['fname' => 'ชาติชาย', 'lname' => 'รักชาติ', 'email' => 'chatchai@hotmail.com']
        ];

        $str = 'Report System';
        return $this->render('index',['str'=>$str,'person'=>$arr]);
    }

}
