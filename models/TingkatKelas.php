<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_tingkat_kelas".
 *
 * @property integer $id_tingkat
 * @property integer $nama_tingkat
 */
class TingkatKelas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_tingkat_kelas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_tingkat'], 'required'],
            [['id_tingkat', 'nama_tingkat'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_tingkat' => 'Id Tingkat',
            'nama_tingkat' => 'Nama Tingkat',
        ];
    }
}
