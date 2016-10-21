<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">

    <div>
        <img src="<?= Yii::getAlias('@web')?>/img/hero_1.jpg" class="img-responsive" alt="header">
    </div>

    <?php
    NavBar::begin([
        'brandLabel' => '<span class="glyphicon glyphicon-cloud"></span> Yii Framework Project Day 4 (Oct 20, 2016)',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
//            'class' => 'navbar-inverse navbar-fixed-top',
            'class' => '',
        ],
    ]);

    /**
     * Sub Menu
     */

    $report_menu = [
        ['label' => 'Person Report', 'url' => ['/first1']],
        ['label' => 'Computer Report without ORM', 'url' => ['/first1/no_orm']],
        ['label' => 'Computer Report with ORM', 'url' => ['/com/selectdata']],
        ['label' => 'Computer Type Report', 'url' => ['/first1/comtype']],
        ['label' => 'Service Report', 'url' => ['/first1/service']],
        ['label' => 'Chart Report', 'url' => ['/site/columnchart']],
        ['label' => 'PDF Report', 'url' => ['/pdftest'],'linkOptions' => ['target'=>'_blank']],
    ];

    $db_menu = [
        ['label' => 'Computer Status', 'url' => ['/comstatus']],
        ['label' => 'Computer Type', 'url' => ['/comtype']],
    ];

    $regis_menu = [
        ['label' => 'Computer', 'url' => ['/com']],
    ];


    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'encodeLabels' => false, /* enable insert html to php */
        'items' => [
            ['label' => '<span class="glyphicon glyphicon-home"></span> Home', 'url' => ['/site/index']],
            ['label' => '<span class="glyphicon glyphicon-baby-formula"></span> Form', 'url' => ['/site/activeform']],
            ['label' => '<span class="glyphicon glyphicon-qrcode"></span> Registration', 'items' => $regis_menu,'visible'=>Yii::$app->session->has('username')],
            ['label' => '<span class="glyphicon glyphicon-info-sign"></span> About', 'url' => ['/site/about']],
            ['label' => '<span class="glyphicon glyphicon-envelope"></span> Contact', 'url' => ['/site/contact']],
            ['label' => '<span class="glyphicon glyphicon-list-alt"></span> Report', 'items' => $report_menu,'visible'=>Yii::$app->session->has('username')],
            ['label' => '<span class="glyphicon glyphicon-cog"></span> Setting', 'items' => $db_menu,'visible'=>Yii::$app->session->get('admin_right')==1], // แบ่งการเห็นเมนูตามสิทธิของผู้ใช้

            /**
             * check that same if then else
             */
            !Yii::$app->session->get('username') ? (
            ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>' . Html::beginForm(['/site/logout'], 'post', ['class' => 'navbar-form'])
                . Html::submitButton(
                    'Logout (' . Yii::$app->session->get('username') . ')',
                    ['class' => 'btn btn-link'] )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
