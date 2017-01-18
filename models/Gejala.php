<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gejala".
 *
 * @property string $kd_gejala
 * @property string $nm_gejala
 * @property string $pertanyaan
 *
 * @property Rules[] $rules
 */
class Gejala extends \yii\db\ActiveRecord
{
    public $kodeGejala;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gejala';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kd_gejala','nm_gejala', 'pertanyaan'], 'required'],
            [['kd_gejala'], 'string', 'max' => 4],
            [['nm_gejala'], 'string', 'max' => 100],
            [['pertanyaan'], 'string', 'max' => 160],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kd_gejala' => 'Kode Gejala',
            'nm_gejala' => 'Nama Gejala',
            'pertanyaan' => 'Pertanyaan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRules()
    {
        return $this->hasMany(Rules::className(), ['maka' => 'kd_gejala']);
    }
}
