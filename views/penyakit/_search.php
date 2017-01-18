<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PenyakitSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="penyakit-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'kd_penyakit') ?>

    <?= $form->field($model, 'nm_penyakit') ?>

    <?= $form->field($model, 'penyebab') ?>

    <?= $form->field($model, 'keterangan') ?>

    <?= $form->field($model, 'photo') ?>

    <?php // echo $form->field($model, 'solusi') ?>

    <div class="form-group">
        <?= Html::submitButton('Cari', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
