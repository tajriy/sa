<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Gejala */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gejala-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_gejala')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nm_gejala')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pertanyaan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Simpan' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
