<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Mapel */

$this->title = 'Update Mapel: ' . $model->id_mapel;
$this->params['breadcrumbs'][] = ['label' => 'Mapels', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_mapel, 'url' => ['view', 'id' => $model->id_mapel]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mapel-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
