<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_status".
 *
 * @property integer $id_status
 * @property string $nama_status
 *
 * @property TblGuru[] $tblGurus
 */
class Status extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_status'], 'required'],
            [['nama_status'], 'string', 'max' => 3],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_status' => 'Id Status',
            'nama_status' => 'Nama Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblGurus()
    {
        return $this->hasMany(TblGuru::className(), ['id_status' => 'id_status']);
    }
}
