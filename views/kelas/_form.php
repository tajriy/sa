<?php
    use app\models\Kelas;
    use app\models\TingkatKelas;
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\helpers\ArrayHelper;

    /* @var $this yii\web\View */
    /* @var $model app\models\Kelas */
    /* @var $form yii\widgets\ActiveForm */
?>

<div class="kelas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?=$form->field($model , 'id_tingkat')->dropDownList(ArrayHelper::map(TingkatKelas::find()->all() , 'id_tingkat' ,
        'nama_tingkat'), ['prompt' => 'Pilih Tingkat Kelas'] );?>
    <?=$form->field($model , 'id_jurusan')->dropDownList(ArrayHelper::map(Kelas::find()->all() , 'id_jurusan' ,
        'nama_jurusan') , ['prompt' => 'Pilih Jurusan']);?>
    <?=$form->field($model , 'nama_kelas')->textInput(['maxlength' => TRUE])?>

    <div class="form-group">
        <?=Html::submitButton($model->isNewRecord ? 'Create' : 'Update' ,
            ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary'])?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
