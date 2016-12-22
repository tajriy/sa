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

    <h1><?=Html::encode($this->title)?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?=Html::a('Create Mapel' , ['create'] , ['class' => 'btn btn-success'])?>
    </p>
    <?=GridView::widget([
        'dataProvider' => $dataProvider ,
        'filterModel'  => $searchModel ,
        'columns'      => [
            ['class' => 'yii\grid\SerialColumn'] ,
            'id_mapel' ,
            'nama_mapel' ,
            'keterangan:ntext' ,
            'kkm' ,
            'id_kurikulum' ,
            // 'semester',
            [
                'class'    => 'yii\grid\ActionColumn' ,
                'template' => '{view}&nbsp;&nbsp;{update}&nbsp;&nbsp;{delete}' ,
                'buttons'  => [
                    'view'   => function($url , $model){
                        return Html::a('<span class="glyphicon glyphicon-list"></span>' , $url , [
                            'title' => Yii::t('yii' , 'View') ,
                        ]);
                    } ,
                    'update' => function($url , $model){
                        return Html::a('<span class="glyphicon glyphicon-pencil"></span>' , $url , [
                            'title' => Yii::t('yii' , 'Update') ,
                        ]);
                    } ,
                    'delete' => function($url , $model){
                        return Html::a('<span class="glyphicon glyphicon-trash"></span>' , $url , [
                            'title' => Yii::t('yii' , 'Delete') ,
                        ]);
                    } ,
                ] ,
            ] ,
        ] ,
    ]);?>
</div>
