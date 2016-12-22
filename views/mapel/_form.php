<?php
    use app\models\Kurikulum;
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\helpers\ArrayHelper;

    /* @var $this yii\web\View */
    /* @var $model app\models\Mapel */
    /* @var $form yii\widgets\ActiveForm */
?>

<div class="mapel-form">

    <?php $form = ActiveForm::begin(); ?>

    <?=$form->field($model , 'nama_mapel')->textInput(['maxlength' => TRUE])?>

    <?=$form->field($model , 'keterangan')->textarea(['rows' => 6])?>

    <?=$form->field($model , 'kkm')->textInput()?>

    <?=$form->field($model , 'id_kurikulum')->dropDownList(ArrayHelper::map(Kurikulum::find()->all() , 'id_kurikulum' ,
        'tahun') , ['prompt' => 'Pilih Kurikulum']);?>

    <?=$form->field($model , 'semester')->textInput()?>

    <div class="form-group">
        <?=Html::submitButton($model->isNewRecord ? 'Create' : 'Update' ,
            ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary'])?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
