<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ComSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Coms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="com-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Com', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'com_id',
            'com_type_id',
            'brand',
            'detail:ntext',
            'accept_date',
            // 'asset_code',
            // 'machine_code',
            // 'cpu_type',
            // 'cpu_speed',
            // 'ram',
            // 'display',
            // 'cd_type',
            // 'harddisk',
            // 'price',
            // 'depart_id',
            // 'com_status_id',
            // 'com_date',
            // 'insurance_date',
            // 'create_date',
            // 'update_date',
            // 'staff',
            // 'note',
            // 'discharge_date',
            // 'buy_type_id',
            // 'budget_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
