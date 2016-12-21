<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TingkatKelas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tingkat-kelas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_tingkat')->textInput() ?>

    <?= $form->field($model, 'nama_tingkat')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
