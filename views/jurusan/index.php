<?php
    use yii\helpers\Html;
    use yii\grid\GridView;

    /* @var $this yii\web\View */
    /* @var $searchModel app\models\JurusanSearch */
    /* @var $dataProvider yii\data\ActiveDataProvider */
    $this->title = 'Jurusans';
    $this->params['breadcrumbs'][] = $this->title;
?>
<div class="jurusan-index">

    <h1><?=Html::encode($this->title)?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?=Html::a('Create Jurusan' , ['create'] , ['class' => 'btn btn-success'])?>
    </p>
    <?=GridView::widget([
        'dataProvider' => $dataProvider ,
        'filterModel'  => $searchModel ,
        'columns'      => [
            ['class' => 'yii\grid\SerialColumn'] ,
            'id_jurusan' ,
            'nama_jurusan' ,
            'singkatan' ,
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
