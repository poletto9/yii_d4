<?php

namespace app\controllers;

use kartik\mpdf\Pdf;

class PdftestController extends \yii\web\Controller
{
    public function actionIndex()
    {

        $car = ['Honda','Toyota','Mazda','Nisson'];

        $conn = \Yii::$app->db;
        $sql = 'select * from com_type';
        $cmd = $conn->createCommand($sql);
        $data = $cmd->queryAll();


        // get your HTML raw content without any layouts or scripts
        $content = $this->renderPartial('index',['car'=>$car,'data'=>$data]);

        // setup kartik\mpdf\Pdf component
        $pdf = new Pdf([
        // set to use core fonts only
                    'mode' => Pdf::MODE_UTF8,
        // A4 paper format
                    'format' => Pdf::FORMAT_A4,
        // portrait orientation
                    'orientation' => Pdf::ORIENT_PORTRAIT,
        // stream to browser inline
                    'destination' => Pdf::DEST_BROWSER,
        // your html content input
                    'content' => $content,
                    // format content from your own css file if needed or use the
                    // enhanced bootstrap css built by Krajee for mPDF formatting
                    'cssFile' => '@vendor/kartik-v/yii2-mpdf/assets/kv-mpdf-bootstrap.min.css',
        // any css to be embedded if required
                    'cssInline' => 'body{font-family: "Garuda";font-size: 12pt;}',
        // set mPDF properties on the fly
                    'options' => ['title' => 'บันทึกข้อความ'],
        // call mPDF methods on the fly
                    'methods' => [
        //'SetHeader' => ['Krajee Report Header'],
        //'SetFooter' => ['{PAGENO}'],
                    ]
                ]);
        // return the pdf output as per the destination setting
        return $pdf->render();
    }

}
