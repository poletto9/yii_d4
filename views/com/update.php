<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Com */

$this->title = 'Update Com: ' . $model->com_id;
$this->params['breadcrumbs'][] = ['label' => 'Coms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->com_id, 'url' => ['view', 'id' => $model->com_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="com-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
