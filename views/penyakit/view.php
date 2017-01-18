<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Penyakit */

$this->title = $model->kd_penyakit." : ".$model->nm_penyakit;
$this->params['breadcrumbs'][] = ['label' => 'Penyakit', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penyakit-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Edit', ['update', 'id' => $model->kd_penyakit], ['class' => 'btn btn-primary ']) ?>
        <?= Html::a('Hapus', ['delete', 'id' => $model->kd_penyakit], [
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
            'kd_penyakit',
            'nm_penyakit',
            'penyebab',
            'keterangan:ntext',
            ['label'=>'photo','format'=>'raw','value'=>'<button type="button" class="btn btn-default"
            data-toggle="modal"
            data-target="#photo-' . $model->kd_penyakit .'"><img src="assets/' . $model->photo . '" width="30px" height="30px"/></button>

<div class="modal fade " id="photo-' . $model->kd_penyakit . '" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 class="modal-title text-center" id="exampleModalLabel">' . $model->nm_penyakit . '</h2>
      </div>
      <div class="modal-body text-center">
            <img src="assets/' . $model->photo . '"/>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
'],
            'solusi:ntext',
        ],
    ]) ?>

</div>
