<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Penyakit */

$this->title = 'Update Penyakit: ' . $model->kd_penyakit;
$this->params['breadcrumbs'][] = ['label' => 'Penyakit', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_penyakit, 'url' => ['view', 'id' => $model->kd_penyakit]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="penyakit-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
