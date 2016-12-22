<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_tingkat_kelas".
 *
 * @property integer $id_tingkat
 * @property string $nama_tingkat
 *
 * @property TblKelas[] $tblKelas
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
            [['id_tingkat', 'nama_tingkat'], 'required'],
            [['id_tingkat'], 'integer'],
            [['nama_tingkat'], 'string', 'max' => 3],
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblKelas()
    {
        return $this->hasMany(TblKelas::className(), ['id_tingkat' => 'id_tingkat']);
    }
}
