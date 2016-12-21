<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_jurusan".
 *
 * @property integer $id_jurusan
 * @property string $nama_jurusan
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
            [['nama_jurusan'], 'required'],
            [['nama_jurusan'], 'string', 'max' => 15],
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
        ];
    }
}
