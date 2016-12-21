<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Kurikulum */

$this->title = 'Create Kurikulum';
$this->params['breadcrumbs'][] = ['label' => 'Kurikulums', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kurikulum-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
