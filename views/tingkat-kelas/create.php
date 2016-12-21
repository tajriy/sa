<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TingkatKelas */

$this->title = 'Create Tingkat Kelas';
$this->params['breadcrumbs'][] = ['label' => 'Tingkat Kelas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tingkat-kelas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
