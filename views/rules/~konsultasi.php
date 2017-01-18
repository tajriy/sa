<?php
    /**
     * Created by PhpStorm.
     * User: asrory
     * Date: 18/01/17
     * Time: 20:58
     */
    use app\models\Gejala;
    use app\models\Penyakit;
    use yii\helpers\ArrayHelper;
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;

?>
<?php
    //    $jumlahData = count($model->getRecords());
    $lengthCtrl = function($model , $rules_ke){
        $jika = $model->getRecord($rules_ke , $model->getRecords());
        $control = $model->getControlIf($jika["jika"]);

        return $control;
    };
    $pertanyaan = function($model , $pertanyaan_ke , $control){
        $html = "<center><div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">Pertanyaan : ".$model->getAskByKey($control[ $pertanyaan_ke ])."</h3></div>
        <div class=\"panel-body\">
            <a class='btn btn-success' href='&'>Ya</a>&nbsp<a class='btn btn-danger' href=''>Tidak</a>
        </div>
    </div></center>";

        return $html;
    };
    //    $jumlahCtrl = count($control);
    $control = $lengthCtrl($model , $_GET["rules_ke"]);
    $tanya = $pertanyaan($model , $_GET["pertanyaan_ke"] , $control);
?>

<?php $form = ActiveForm::begin();
    echo $tanya;
?>

<?php ActiveForm::end(); ?>