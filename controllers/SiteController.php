<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        $model = new LoginForm();
        if (Yii::$app->request->post()) {
            if ($model->load(Yii::$app->request->post()) && $model->login()) {
                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('LoginErr', 'กรุณาตรวจสอบ ผู้ใช้งาน/รหัสผ่าน');
            }
        } return $this->render('login', [ 'model' => $model, ]);
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->session->removeAll();

        return $this->redirect(['site/index']);
    }

    /**
     * Displays contact page.
     *
     * @return string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionColumnchart(){

        $conn = \Yii::$app->db;
        $sql = 'SELECT t.com_type_name, COUNT(c.com_id) as cdata FROM com c
                LEFT JOIN com_type t ON t.com_type_id = c.com_type_id
                GROUP BY c.com_type_id';
        $cmd = $conn->createCommand($sql);
        $data = $cmd->queryAll();

        foreach ($data as $item) {
            $chart[]=['name'=>$item['com_type_name'],'data'=>[intval($item['cdata'])]];
        }

        return $this->render('columnchart',['data'=>$chart]);
    }

    public function actionActiveform(){
        return $this->render('activeform');
    }
}
