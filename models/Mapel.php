<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_mapel".
 *
 * @property integer $id_mapel
 * @property string $nama_mapel
 * @property string $keterangan
 * @property integer $kkm
 */
class Mapel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_mapel';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_mapel', 'keterangan', 'kkm'], 'required'],
            [['keterangan'], 'string'],
            [['kkm'], 'integer'],
            [['nama_mapel'], 'string', 'max' => 42],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_mapel' => 'Id Mapel',
            'nama_mapel' => 'Nama Mapel',
            'keterangan' => 'Keterangan',
            'kkm' => 'Kkm',
        ];
    }
}
