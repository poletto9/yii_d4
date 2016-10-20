<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ComType */

$this->title = $model->com_type_id;
$this->params['breadcrumbs'][] = ['label' => 'Com Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="com-type-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->com_type_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->com_type_id], [
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
            'com_type_id',
            'com_type_name',
        ],
    ]) ?>

</div>
