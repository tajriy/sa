<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MapelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mapels';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mapel-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Mapel', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_mapel',
            'nama_mapel',
            'keterangan:ntext',
            'kkm',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
