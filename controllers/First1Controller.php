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

    public function actionNo_orm($tid){

        // Connect DB
        $conn = \Yii::$app->db;

        // SQL Command
        $sql = 'select * from com where com_type_id=:id';

        // Create QUuery
        $cmd = $conn->createCommand($sql);

        // initial value for paremeter
        $cmd->bindValue(':id',$tid);

        // Run Query
        $data = $cmd->queryAll();

        return $this->render('page1',['data'=>$data]);
    }

    public function actionComtype(){
        $conn = \Yii::$app->db;
        $sql = 'select * from com_type';
        $cmd = $conn->createCommand($sql);
        $data = $cmd->queryAll();

        return $this->render('page2',['data'=>$data]);
    }

    public function actionService(){
        $conn = \Yii::$app->db;
        $sql = 'select com.brand, com_service.* FROM com_service LEFT JOIN com on com.com_id = com_service.com_id';
        $cmd = $conn->createCommand($sql);
        $data = $cmd->queryAll();

        return $this->render('page3',['data'=>$data]);
    }

}
