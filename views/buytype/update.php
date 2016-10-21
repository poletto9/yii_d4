<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BuyType */

$this->title = 'Update Buy Type: ' . $model->buy_type_id;
$this->params['breadcrumbs'][] = ['label' => 'Buy Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->buy_type_id, 'url' => ['view', 'id' => $model->buy_type_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="buy-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
