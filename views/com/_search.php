<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ComSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="com-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'com_id') ?>

    <?= $form->field($model, 'com_type_id') ?>

    <?= $form->field($model, 'brand') ?>

    <?= $form->field($model, 'detail') ?>

    <?= $form->field($model, 'accept_date') ?>

    <?php // echo $form->field($model, 'asset_code') ?>

    <?php // echo $form->field($model, 'machine_code') ?>

    <?php // echo $form->field($model, 'cpu_type') ?>

    <?php // echo $form->field($model, 'cpu_speed') ?>

    <?php // echo $form->field($model, 'ram') ?>

    <?php // echo $form->field($model, 'display') ?>

    <?php // echo $form->field($model, 'cd_type') ?>

    <?php // echo $form->field($model, 'harddisk') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'depart_id') ?>

    <?php // echo $form->field($model, 'com_status_id') ?>

    <?php // echo $form->field($model, 'com_date') ?>

    <?php // echo $form->field($model, 'insurance_date') ?>

    <?php // echo $form->field($model, 'create_date') ?>

    <?php // echo $form->field($model, 'update_date') ?>

    <?php // echo $form->field($model, 'staff') ?>

    <?php // echo $form->field($model, 'note') ?>

    <?php // echo $form->field($model, 'discharge_date') ?>

    <?php // echo $form->field($model, 'buy_type_id') ?>

    <?php // echo $form->field($model, 'budget_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
