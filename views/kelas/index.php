<?php
    use yii\helpers\Html;
    use yii\grid\GridView;
    use yii\db\Query;

    /* @var $this yii\web\View */
    /* @var $searchModel app\models\KelasSearch */
    /* @var $dataProvider yii\data\ActiveDataProvider */
    $this->title = 'Kelas';
    $this->params['breadcrumbs'][] = $this->title;
?>
<div class="kelas-index">

    <h1><?=Html::encode($this->title)?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?=Html::a('Create Kelas' , ['create'] , ['class' => 'btn btn-success'])?>
    </p>
    <?=GridView::widget([
        'dataProvider' => $dataProvider ,
        'filterModel'  => $searchModel ,
        'columns'      => [
            ['class' => 'yii\grid\SerialColumn'] ,
            //                'id_kelas' ,
            [
                'attribute' => 'id_tingkat' ,
                'value'     => function($model){
                    $db = Yii::$app->db;
                    $mod = new Query;
                    $mod = $db->createCommand("SELECT nama_tingkat  FROM tbl_tingkat_kelas  where id_tingkat=". $model["id_tingkat"]);

                    return $mod->queryOne()[ array_keys($mod->queryOne())[0] ];
                } ,
            ] ,
            [
                'attribute' => 'id_jurusan' ,
                'value'     => function($model){
                    $db = Yii::$app->db;
                    $mod = new Query;
                    $mod = $db->createCommand("SELECT nama_jurusan  FROM tbl_jurusan  where id_jurusan=" .
                        $model["id_jurusan"]);

                    return $mod->queryOne()[ array_keys($mod->queryOne())[0] ];
                } ,
            ] ,
            'nama_kelas' ,
            ['class' => 'yii\grid\ActionColumn',
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
                 },
             ],
            ] ,
        ] ,
    ]);?>
</div>