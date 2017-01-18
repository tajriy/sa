<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Rules */

$this->title = 'Update Rules: ' . $model->kd_rules;
$this->params['breadcrumbs'][] = ['label' => 'Rules', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kd_rules, 'url' => ['view', 'id' => $model->kd_rules]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rules-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
