<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GuruSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="guru-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'nip') ?>

    <?= $form->field($model, 'nama_guru') ?>

    <?= $form->field($model, 'alamat') ?>

    <?= $form->field($model, 'nomor_hp') ?>

    <?= $form->field($model, 'id_status') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'password') ?>

    <?php // echo $form->field($model, 'tgl_lahir') ?>

    <?php // echo $form->field($model, 'id_keahlian') ?>

    <?php // echo $form->field($model, 'pendidikan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
