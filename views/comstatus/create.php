<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ComStatus */

$this->title = 'Create Com Status';
$this->params['breadcrumbs'][] = ['label' => 'Com Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="com-status-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
