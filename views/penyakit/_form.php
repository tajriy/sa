<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use kartik\widgets\FileInput;

    /* @var $this yii\web\View */
    /* @var $model app\models\Penyakit */
    /* @var $form yii\widgets\ActiveForm */
?>

<div class="penyakit-form">
    <style>
        .file-input-new .file-preview {
            display: inherit !important;
        }

        .file-preview {
            height: 301px;
        }
    </style>

    <div class="row">
        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
        <div class="col-md-6">
            <?=$form->field($model , 'kd_penyakit')->textInput([
                'maxlength' => TRUE ,
                "value"     => $model->kodePenyakit ,
                "readOnly"  => TRUE ,
            ])?>
            <?php
            $data=isset($model->photo)?[
                'pluginOptions' => [
                    'initialPreview'       => 'assets/'.$model->photo ,
                    'initialPreviewAsData' => TRUE ,
                    'initialCaption'       => "$model->nm_penyakit" ,
                ] ,
            ]:[];
            ?>
            <?=$form->field($model , 'photo')->widget(FileInput::className() ,$data)?>
        </div>
        <div class="col-md-6">
            <?=$form->field($model , 'nm_penyakit')->textInput(['maxlength' => TRUE])?>

            <?=$form->field($model , 'penyebab')->textarea(['row' => 2])?>

            <?=$form->field($model , 'keterangan')->textarea(['rows' => 2])?>

            <?=$form->field($model , 'solusi')->textarea(['rows' => 2])?>

            <div class="form-group">
                <?=Html::submitButton($model->isNewRecord ? 'Simpan' : 'Update' ,
                    ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary'])?>
                <?=Html::resetButton('Reset' , ['class' => 'btn btn-danger'])?>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>
