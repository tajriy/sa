<?php
    /* @var $this yii\web\View */
    use yii\bootstrap\Html;

    $this->title = 'Eyes Expert System';
?>

<div class="site-index">
    <style>blockquote{border-left:none !important}</style>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5">
                <h2></h2>
                <blockquote>
                    <div class="row " style="color:#546e7a;font-style: oblique;margin-bottom: 0px">&nbsp;Qur'an</div>
                    <div class="row " style="color:#546e7a">
                        <div class="col-md-6 text-right" style="text-align: right;">
                            <p class="">
				<span style="font-style: normal;font-size: 19pt">
				    <span style="color: #259b24;font-size: 13pt;font-style: oblique">سورة البلد: ٨</span>
				    <br>أَلَمْ نَجْعَل لَّهُ عَيْنَيْنِ</span>
                                <br>Al-Balad (The City)- Ayat 8 <br></p>
                        </div>
                        <div class="col-md-6">
                            <p><br>
                                <strong>Indonesia :</strong><br>
                                <i style="font-size: 12pt">" Bukankah Kami telah memberikan kepadanya dua buah mata "
                                    .</i></p>
                        </div>
                    </div>
                </blockquote>
                <!--                <img class="header center-on-small-only" src="mata.jpg" alt="anatomi mata" width="90%"-->
                <!--                     class="pull-left"/>-->
                <div class="text-center footer" style="padding-bottom: 25px">
                     <?= Html::a('Konsultasi', ['rules/diagnosa'], ['class' => 'btn btn-lg btn-success btn-raised ripple-effect']) ?>
                </div>
            </div>
            <div class="col-md-7">

                <h2 class="" style="color: #546e7a">EES :
                    <span class=" center-on-small-only"
                          style="color: #259b24 !important">Eyes Expert System</span>
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
        </div>
    </div>