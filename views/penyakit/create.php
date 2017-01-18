<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Penyakit */

$this->title = 'Tambah Penyakit';
$this->params['breadcrumbs'][] = ['label' => 'Penyakit', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penyakit-create">

    <h2><?= Html::encode($this->title) ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
