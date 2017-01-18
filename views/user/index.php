<?php
    use yii\helpers\Html;
    use yii\grid\GridView;
    use yii\widgets\Pjax;

    /* @var $this yii\web\View */
    /* @var $searchModel app\models\UserSearch */
    /* @var $dataProvider yii\data\ActiveDataProvider */
    $this->title = 'User';
    $this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?=Html::encode($this->title)?></h1>
    <?=Html::a('Tambah User' , ['create'] , ['class' => 'btn  btn-raised ripple-effect btn-success pull-right'])?>
    <br>
    <br>
    <?php Pjax::begin(); ?>    <?=GridView::widget([
        'dataProvider' => $dataProvider ,
        'filterModel'  => $searchModel ,
        'columns'      => [
            ['class' => 'yii\grid\SerialColumn'] ,
            'id' ,
            'username' ,
            //            'password',
            'authKey' ,
            'accessToken' ,
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
