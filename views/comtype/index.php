<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ComTypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Com Types';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="com-type-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Com Type', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'com_type_id',
            'com_type_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
