<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Kurikulum */

$this->title = 'Update Kurikulum: ' . $model->id_kurikulum;
$this->params['breadcrumbs'][] = ['label' => 'Kurikulums', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kurikulum, 'url' => ['view', 'id' => $model->id_kurikulum]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kurikulum-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
