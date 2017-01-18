<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Rules */

$this->title = $model->kd_rules;
$this->params['breadcrumbs'][] = ['label' => 'Rules', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rules-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Edit', ['update', 'id' => $model->kd_rules,'maka'=>$model->maka], ['class' => 'btn 
        btn-primary']) ?>
        <?= Html::a('Hapus', ['delete', 'id' => $model->kd_rules], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Apakah anda yakin ingin menghapus item ini? ',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'kd_rules',
            'jika',
            'maka',
        ],
    ]) ?>

</div>
