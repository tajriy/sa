<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_guru".
 *
 * @property integer $nip
 * @property string $nama_guru
 * @property string $alamat
 * @property integer $nomor_hp
 * @property integer $id_status
 * @property string $email
 * @property string $password
 * @property string $tgl_lahir
 * @property integer $keahlian
 * @property integer $pendidikan
 *
 * @property TblMapel $keahlian0
 * @property TblStatus $idStatus
 */
class Guru extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_guru';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nip', 'nama_guru', 'alamat', 'nomor_hp', 'id_status', 'email', 'password', 'tgl_lahir', 'keahlian', 'pendidikan'], 'required'],
            [['nip', 'nomor_hp', 'id_status', 'keahlian', 'pendidikan'], 'integer'],
            [['alamat', 'email', 'password'], 'string'],
            [['tgl_lahir'], 'safe'],
            [['nama_guru'], 'string', 'max' => 30],
            [['keahlian'], 'exist', 'skipOnError' => true, 'targetClass' => Mapel::className(), 'targetAttribute' => ['keahlian' => 'id_mapel']],
            [['id_status'], 'exist', 'skipOnError' => true, 'targetClass' => Status::className(), 'targetAttribute' => ['id_status' => 'id_status']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nip' => 'Nip',
            'nama_guru' => 'Nama Guru',
            'alamat' => 'Alamat',
            'nomor_hp' => 'Nomor Hp',
            'id_status' => 'Id Status',
            'email' => 'Email',
            'password' => 'Password',
            'tgl_lahir' => 'Tgl Lahir',
            'keahlian' => 'Keahlian',
            'pendidikan' => 'Pendidikan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKeahlian0()
    {
        return $this->hasOne(TblMapel::className(), ['id_mapel' => 'keahlian']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdStatus()
    {
        return $this->hasOne(TblStatus::className(), ['id_status' => 'id_status']);
    }
}
