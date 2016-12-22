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
 * @property integer $id_kurikulum
 * @property integer $semester
 *
 * @property TblGuru[] $tblGurus
 * @property TblKurikulum $idKurikulum
 * @property TblNilai[] $tblNilais
 * @property TblTugas[] $tblTugas
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
            [['nama_mapel', 'keterangan', 'kkm', 'id_kurikulum'], 'required'],
            [['keterangan'], 'string'],
            [['kkm', 'id_kurikulum', 'semester'], 'integer'],
            [['nama_mapel'], 'string', 'max' => 42],
            [['id_kurikulum'], 'exist', 'skipOnError' => true, 'targetClass' => Kurikulum::className(), 'targetAttribute' => ['id_kurikulum' => 'id_kurikulum']],
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
            'id_kurikulum' => 'Id Kurikulum',
            'semester' => 'Semester',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblGurus()
    {
        return $this->hasMany(TblGuru::className(), ['keahlian' => 'id_mapel']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdKurikulum()
    {
        return $this->hasOne(TblKurikulum::className(), ['id_kurikulum' => 'id_kurikulum']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblNilais()
    {
        return $this->hasMany(TblNilai::className(), ['id_mapel' => 'id_mapel']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblTugas()
    {
        return $this->hasMany(TblTugas::className(), ['id_mapel' => 'id_mapel']);
    }
}
