<?php
    use app\models\Gejala;
    use app\models\Penyakit;
    use yii\helpers\ArrayHelper;
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;

    /* @var $this yii\web\View */
    /* @var $model app\models\Rules */
    /* @var $form yii\widgets\ActiveForm */
?>

<div class="rules-form">
    <div class="row">
        <div class="col-lg-12">
            <?php $form = ActiveForm::begin(); ?>

            <?=$form->field($model , 'kd_rules')->textInput([
                'maxlength' => TRUE ,
                'value'     => $model->kodeRules,
            ])?>
            <?php echo $form->field($model, 'jika')->checkboxList(ArrayHelper::map(Gejala::find()->all() , 'kd_gejala' ,
                function($model , $defaultValue){
                    return 'Tanya [ ' . $model['kd_gejala'] . ' ] : ' . $model['pertanyaan'] . "";
                }) , ['prompt' => 'Pilih Pertanyaan','separator' => '<br>',]);
            ?>
            <?=$form->field($model , 'maka')->dropDownList(ArrayHelper::map(Penyakit::find()->all() ,
                'kd_penyakit' ,
                function($model , $defaultValue){
                    return 'Diagnosa [ ' . $model['kd_penyakit'] . ' ] : ' . $model['nm_penyakit'] . '';
                }) , ['prompt' => 'Pilih Diagnosa']);?>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <?=Html::submitButton($model->isNewRecord ? 'Simpan' : 'Update' ,
                    ['class' => $model->isNewRecord ? 'btn btn-lg btn-success' : 'btn btn-primary'])?>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
    </div>

    </div>