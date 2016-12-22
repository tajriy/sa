<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_kurikulum".
 *
 * @property integer $id_kurikulum
 * @property string $tahun
 * @property string $keterangan
 *
 * @property TblMapel[] $tblMapels
 */
class Kurikulum extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_kurikulum';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tahun', 'keterangan'], 'required'],
            [['tahun'], 'safe'],
            [['keterangan'], 'string', 'max' => 70],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_kurikulum' => 'Id Kurikulum',
            'tahun' => 'Tahun',
            'keterangan' => 'Keterangan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblMapels()
    {
        return $this->hasMany(TblMapel::className(), ['id_kurikulum' => 'id_kurikulum']);
    }
}
