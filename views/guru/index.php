<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GuruSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Gurus';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="guru-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Guru', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nip',
            'nama_guru',
            'alamat:ntext',
            'nomor_hp',
            'id_status',
            // 'email:ntext',
            // 'password:ntext',
            // 'tgl_lahir',
            // 'id_keahlian',
            // 'pendidikan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
