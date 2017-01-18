<?php
    use yii\helpers\Html;
    use yii\grid\GridView;
    use yii\widgets\Pjax;

    /* @var $this yii\web\View */
    /* @var $searchModel app\models\GejalaSearch */
    /* @var $dataProvider yii\data\ActiveDataProvider */
    $this->title = 'Gejala';
    $this->params['breadcrumbs'][] = $this->title;
?>
<div class="gejala-index">

    <h1><?=Html::encode($this->title)?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?=Html::a('Tambah Gejala' , ['create'] , ['class' => 'btn btn-success'])?>
    </p>
    <?php Pjax::begin(); ?>    <?=GridView::widget([
        'dataProvider' => $dataProvider ,
        'filterModel'  => $searchModel ,
        'columns'      => [
            ['class' => 'yii\grid\SerialColumn'] ,
            'kd_gejala' ,
            'nm_gejala' ,
            'pertanyaan' ,
            [
                'class'    => 'yii\grid\ActionColumn' ,
                'template' => '{view}&nbsp;&nbsp;{update}&nbsp;&nbsp;{delete}' ,
                'buttons'  => [
                    'view' => function($url , $model){
                        return Html::a('<span class="glyphicon glyphicon-list"></span>' , $url , [
                            'title' => Yii::t('yii' , 'View') ,
                        ]);
                    } ,
                ] ,
            ] ,
        ] ,
    ]);?>
    <?php Pjax::end(); ?></div>
