<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Gejala */

$this->title = $model->kd_gejala;
$this->params['breadcrumbs'][] = ['label' => 'Gejala', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gejala-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Edit', ['update', 'id' => $model->kd_gejala], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Hapus', ['delete', 'id' => $model->kd_gejala], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Apakah anda yakin ingin menghapus item ini?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'kd_gejala',
            'nm_gejala',
            'pertanyaan',
        ],
    ]) ?>

</div>
