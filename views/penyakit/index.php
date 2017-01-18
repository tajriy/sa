<?php
    use app\models\TblUser;
    use yii\bootstrap\Modal;
    use yii\helpers\Html;
    use yii\grid\GridView;
    use yii\widgets\Pjax;
    use yii\web\View;

    /* @var $this yii\web\View */
    /* @var $searchModel app\models\PenyakitSearch */
    /* @var $dataProvider yii\data\ActiveDataProvider */
    $this->title = 'Penyakit';
    $this->params['breadcrumbs'][] = $this->title;
?>
<div class="penyakit-index">

    <h1><?=Html::encode($this->title)?></h1>

    <?=Html::a('Tambah Penyakit' , ['create'] , [
        'class' => 'btn  btn-raised ripple-effect btn-success pull-right' ,
        'id'    => 'tambah' ,
    ]);?>
    <br>
    <br>


    <?php Pjax::begin(); ?>
    <?=GridView::widget([
        'dataProvider' => $dataProvider ,
        'filterModel'  => $searchModel ,
        'columns'      => [
            ['class' => 'yii\grid\SerialColumn'] ,
            'kd_penyakit' ,
            'nm_penyakit' ,
            'penyebab' ,
            [
                'attribute' => 'photo' ,
                'format'    => 'raw' ,
                'value'     => function($model){
                    $a = '
<!-- Small modal -->
<button type="button" class="btn btn-default" data-toggle="modal" data-target="#photo-' . $model->kd_penyakit .
                        '"><img src="assets/' . $model->photo . '" width="30px" height="30px"/></button>

<div class="modal fade " id="photo-' . $model->kd_penyakit . '" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 class="modal-title text-center" id="exampleModalLabel">' . $model->nm_penyakit . '</h2>
      </div>
      <div class="modal-body text-center">
            <img src="assets/' . $model->photo . '"/>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
';

                    return $a;
                } ,
            ] ,
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
