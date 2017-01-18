<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="col-md-7">

        <h2 class="" style="color: #546e7a">EES :
            <span class=" center-on-small-only" style="color: #259b24 !important">Eyes Expert System</span>
        </h2>
        <blockquote style="font-size: 12pt"><p style="color: #546e7a">
                <span style="color: #259b24 !important;">Eyes</span><br>Mata
                adalah organ penglihatan yang mendeteksi cahaya. Mata merupakan salah satu organ tubuh yang
                sangat penting. Cara kerja mata yang sederhana salah satunya adalah hanya untuk mengetahui
                apakah lingkungan sekitarnya adalah terang atau gelap</p>
            <p style="color: #546e7a">
                <span style="color: #259b24 !important">Expert System</span><br>
                Sistem Pakar(dalam bahasa Inggris :expert system) adalah sistem informasi yang berisi dengan
                pengetahuan dari pakar sehingga dapat digunakan untuk konsultasi. Pengetahuan dari pakar di
                dalam sistem ini digunakan sebagi dasar oleh Sistem Pakar untuk menjawab pertanyaan
                (konsultasi).</p></blockquote>


    </div>

    <code><?= __FILE__ ?></code>
</div>
