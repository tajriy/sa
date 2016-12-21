<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TingkatKelas */

$this->title = 'Update Tingkat Kelas: ' . $model->id_tingkat;
$this->params['breadcrumbs'][] = ['label' => 'Tingkat Kelas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_tingkat, 'url' => ['view', 'id' => $model->id_tingkat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tingkat-kelas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
