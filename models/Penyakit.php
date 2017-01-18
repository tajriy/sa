<?php
    namespace app\models;

    use Yii;

    /**
     * This is the model class for table "penyakit".
     *
     * @property string  $kd_penyakit
     * @property string  $nm_penyakit
     * @property string  $penyebab
     * @property string  $keterangan
     * @property string  $photo
     * @property string  $solusi
     *
     * @property Rules[] $rules
     */
    class Penyakit extends \yii\db\ActiveRecord{
        /**
         * @inheritdoc
         */
        public $kodePenyakit;

        public static function tableName()
        {
            return 'penyakit';
        }

        /**
         * @inheritdoc
         */
        public function rules()
        {
            return [
                [
                    [
                        'kd_penyakit' ,
                        'nm_penyakit' ,
                        'penyebab' ,
                        'keterangan' ,
//                        'photo' ,
                        'solusi' ,
                    ] ,
                    'required' ,
                ] ,
                [
                    [
                        'keterangan' ,
                        'solusi' ,
                    ] ,
                    'string' ,
                ] ,
                [
                    ['photo'] ,
                    'file' ,
                    'skipOnEmpty' => TRUE ,
                    'extensions'  => 'png, jpg' ,
                ] ,
                [
                    ['kd_penyakit'] ,
                    'string' ,
                    'max' => 3 ,
                ] ,
                [
                    ['nm_penyakit'] ,
                    'string' ,

                ] ,
                [
                    ['penyebab'] ,
                    'string' ,

                ] ,
            ];
        }

        /**
         * @inheritdoc
         */
        public function attributeLabels()
        {
            return [
                'kd_penyakit' => 'Kode Penyakit' ,
                'nm_penyakit' => 'Nama Penyakit' ,
                'penyebab'    => 'Penyebab' ,
                'keterangan'  => 'Keterangan' ,
                'photo'       => 'Sampel Photo' ,
                'solusi'      => 'Solusi' ,
            ];
        }

        /**
         * @return \yii\db\ActiveQuery
         */
        public function getRules()
        {
            return $this->hasMany(Rules::className() , ['jika' => 'kd_penyakit']);
        }
    }
