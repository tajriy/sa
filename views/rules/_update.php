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

            <?=$form->field($model , 'jika')->dropDownList(ArrayHelper::map(Gejala::find()->all() , 'kd_gejala' ,
                function($model , $defaultValue){
                    return '[ ' . $model['kd_gejala'] . ' ] : ' . $model['nm_gejala'];
                }) , ['prompt' => 'Pilih Gejala']);?>
        </div>
        <div class="col-lg-6">
            <?= $form->field($model, 'maka[0]')->dropDownList(ArrayHelper::map(Gejala::find()->all() , 'kd_gejala' ,
                function($model , $defaultValue){
                    return 'Tanya [ ' . $model['kd_gejala'] . ' ] : ' . $model['pertanyaan'] . '';
                }) , ['options' => [$_GET['id'] => ['selected'=>true]], 'prompt' => 'Pilih Pertanyaan']) ?>
        </div>
        <div class="col-lg-6">
            <?=$form->field($model , 'maka[1]')->dropDownList(ArrayHelper::map(Penyakit::find()->all() ,
                'kd_penyakit' ,
                function($model , $defaultValue){
                    return 'Diagnosa [ ' . $model['kd_penyakit'] . ' ] : ' . $model['nm_penyakit'] . '';
                }) , ['options' => [$_GET['id'] => ['selected'=>true]],'prompt' => 'Pilih Diagnosa']);?>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <?=Html::submitButton($model->isNewRecord ? 'Create' : 'Update' ,
                    ['class' => $model->isNewRecord ? 'btn btn-lg btn-success' : 'btn btn-primary'])?>
            </div>
        </div>
        <?php ActiveForm::end(); ?>


    </div>