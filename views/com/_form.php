<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Com */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="com-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'com_type_id')->textInput() ?>

    <?= $form->field($model, 'brand')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'detail')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'accept_date')->textInput() ?>

    <?= $form->field($model, 'asset_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'machine_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cpu_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cpu_speed')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ram')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'display')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cd_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'harddisk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'depart_id')->textInput() ?>

    <?= $form->field($model, 'com_status_id')->textInput() ?>

    <?= $form->field($model, 'com_date')->textInput() ?>

    <?= $form->field($model, 'insurance_date')->textInput() ?>

    <?= $form->field($model, 'create_date')->textInput() ?>

    <?= $form->field($model, 'update_date')->textInput() ?>

    <?= $form->field($model, 'staff')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'note')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'discharge_date')->textInput() ?>

    <?= $form->field($model, 'buy_type_id')->textInput() ?>

    <?= $form->field($model, 'budget_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
