<?php
    use app\models\Gejala;
    use yii\helpers\ArrayHelper;
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;

    /* @var $this yii\web\View */
    /* @var $model app\models\Rules */
    /* @var $form yii\widgets\ActiveForm */
?>

<div class="rules-form">
    <style>
        label {
            font-style: normal !important;
            font-weight: normal !important;
        }
    </style>
    <div class="row">

        <div class="col-lg-12">
            <h4>Beri tanda centang pada gejala yang dirasakan oleh Pasien :</h4>
            <?php $form = ActiveForm::begin(); ?>
            <?php echo $form->field($model , 'kd_gejala')->checkboxList(ArrayHelper::map(Gejala::find()->all() ,
                'kd_gejala' , function($model){
                    return 'Tanya [ ' . $model['kd_gejala'] . ' ] : ' . $model['pertanyaan'] . "";
                }) , [
                'prompt' => 'Pilih Pertanyaan' ,
                'separator' => '<br>' ,
            ]);
            ?>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <?=Html::submitButton('Diagnosa' , ['class' => 'btn btn-lg btn-success']);?>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
    </div>

</div>