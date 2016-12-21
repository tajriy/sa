<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\KurikulumSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kurikulum-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_kurikulum') ?>

    <?= $form->field($model, 'nip') ?>

    <?= $form->field($model, 'id_kelas') ?>

    <?= $form->field($model, 'id_mapel') ?>

    <?= $form->field($model, 'id_tahun_ajaran') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
