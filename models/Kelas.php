<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_kelas".
 *
 * @property integer $id_kelas
 * @property integer $id_tingkat
 * @property integer $id_jurusan
 * @property string $nama_kelas
 */
class Kelas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_kelas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_tingkat', 'id_jurusan', 'nama_kelas'], 'required'],
            [['id_tingkat', 'id_jurusan'], 'integer'],
            [['nama_kelas'], 'string', 'max' => 2],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_kelas' => 'Id Kelas',
            'id_tingkat' => 'Id Tingkat',
            'id_jurusan' => 'Id Jurusan',
            'nama_kelas' => 'Nama Kelas',
        ];
    }
}
