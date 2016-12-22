<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MapelSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mapel-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_mapel') ?>

    <?= $form->field($model, 'nama_mapel') ?>

    <?= $form->field($model, 'keterangan') ?>

    <?= $form->field($model, 'kkm') ?>

    <?= $form->field($model, 'id_kurikulum') ?>

    <?php // echo $form->field($model, 'semester') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
