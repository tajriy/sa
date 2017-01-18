<?php
    /* @var $this \yii\web\View */
    /* @var $content string */
    use yii\helpers\Html;
    use yii\bootstrap\Nav;
    use yii\bootstrap\NavBar;
    use yii\widgets\Breadcrumbs;
    use app\assets\AppAsset;

    AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?=Yii::$app->language?>">
<head>
    <meta charset="<?=Yii::$app->charset?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?=Html::csrfMetaTags()?>
    <title><?=Html::encode($this->title)?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
        NavBar::begin([
            'brandLabel' => 'EES' ,
            'brandUrl'   => Yii::$app->homeUrl ,
            'options'    => [
                'class' => 'navbar-inverse navbar-fixed-top' ,
            ] ,
        ]);
        $menu = isset(Yii::$app->user->identity->username) ? [
            [
                'label' => 'Home' ,
                'url'   => ['/site/index'] ,
            ] ,
            [
                'label' => 'Penyakit' ,
                'url'   => ['/penyakit'] ,
            ] ,
            [
                'label' => 'Gejala' ,
                'url'   => ['/gejala'] ,
            ] ,
            [
                'label' => 'Rules' ,
                'url'   => ['/rules'] ,
            ] ,
            [
                'label' => 'User' ,
                'url'   => ['/user'] ,
            ] ,
            Yii::$app->user->isGuest ? ([
                'label' => 'Login' ,
                'url'   => ['/site/login'] ,
            ]) : ('<li>' . Html::beginForm(['/site/logout'] , 'post') .
                Html::submitButton('Logout (' . Yii::$app->user->identity->username . ')' ,
                    ['class' => 'btn btn-link logout']) . Html::endForm() . '</li>') ,
        ] : [
            [
                'label' => 'Home' ,
                'url'   => ['/site/index'] ,
            ] ,
            Yii::$app->user->isGuest ? ([
                'label' => 'Login' ,
                'url'   => ['/site/login'] ,
            ]) : ('<li>' . Html::beginForm(['/site/logout'] , 'post') .
                Html::submitButton('Logout (' . Yii::$app->user->identity->username . ')' ,
                    ['class' => 'btn btn-link logout']) . Html::endForm() . '</li>') ,
        ];
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'] ,
            'items'   => $menu ,
        ]);
        NavBar::end();
    ?>

    <div class="container">
        <?=Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [] ,
        ])?>
        <?=$content?>
    </div>
</div>

<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <h5 class="text-primary">Eyes Expert System (EES)</h5>
                <p class="grey-text text-lighten-4">Merupakan suatu sistem pakar mata yang digunakan untuk
                    mengidentifikasi penyakit pada mata. Dalam pembuatan sistem ini menggunakan metode forward chaining
                    dan fuzzy Sugeno</p>
            </div>
            <div class="col-md-2">
                <h5 class="text-primary">Anggota Kelompok</h5>
                <ul class="list-unstyled">
                    <li>Rianto Anggara Putra</li>
                    <li>Tama Asrory Ridhana</li>
                    <li>Ulfah Adzkia</li>
                </ul>
            </div>
            <div class="col-md-3">
                <div class="footer-copyright"><br>
                        &copy; <?=date('Y')?> Sistem Pakar
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
