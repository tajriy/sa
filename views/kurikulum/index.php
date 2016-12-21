<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KurikulumSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kurikulums';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kurikulum-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Kurikulum', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_kurikulum',
            'nip',
            'id_kelas',
            'id_mapel',
            'id_tahun_ajaran',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
