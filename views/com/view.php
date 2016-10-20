<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Com */

$this->title = $model->com_id;
$this->params['breadcrumbs'][] = ['label' => 'Coms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="com-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->com_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->com_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'com_id',
            'com_type_id',
            'brand',
            'detail:ntext',
            'accept_date',
            'asset_code',
            'machine_code',
            'cpu_type',
            'cpu_speed',
            'ram',
            'display',
            'cd_type',
            'harddisk',
            'price',
            'depart_id',
            'com_status_id',
            'com_date',
            'insurance_date',
            'create_date',
            'update_date',
            'staff',
            'note',
            'discharge_date',
            'buy_type_id',
            'budget_id',
        ],
    ]) ?>

</div>
