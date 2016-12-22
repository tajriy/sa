<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_jurusan".
 *
 * @property integer $id_jurusan
 * @property string $nama_jurusan
 * @property string $singkatan
 *
 * @property TblKelas[] $tblKelas
 */
class Jurusan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_jurusan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_jurusan', 'singkatan'], 'required'],
            [['nama_jurusan'], 'string', 'max' => 50],
            [['singkatan'], 'string', 'max' => 5],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_jurusan' => 'Id Jurusan',
            'nama_jurusan' => 'Nama Jurusan',
            'singkatan' => 'Singkatan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblKelas()
    {
        return $this->hasMany(TblKelas::className(), ['id_jurusan' => 'id_jurusan']);
    }
}
