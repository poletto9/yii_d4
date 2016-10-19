<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ComStatusSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Computer Statuses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="com-status-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Com Status', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'com_status_id',
            'com_status_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
