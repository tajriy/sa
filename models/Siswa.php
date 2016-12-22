<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_siswa".
 *
 * @property integer $nis
 * @property string $nama_siswa
 * @property string $tanggal_lahir
 * @property string $alamat
 * @property string $nama_orang_tua
 * @property integer $nomor_hp
 * @property integer $id_kelas
 * @property string $email
 *
 * @property TblNilai[] $tblNilais
 * @property TblKelas $idKelas
 * @property TblTugas[] $tblTugas
 */
class Siswa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_siswa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nis', 'nama_siswa', 'tanggal_lahir', 'alamat', 'nama_orang_tua', 'nomor_hp', 'id_kelas', 'email'], 'required'],
            [['nis', 'nomor_hp', 'id_kelas'], 'integer'],
            [['tanggal_lahir'], 'safe'],
            [['alamat'], 'string'],
            [['nama_siswa', 'nama_orang_tua'], 'string', 'max' => 30],
            [['email'], 'string', 'max' => 35],
            [['id_kelas'], 'exist', 'skipOnError' => true, 'targetClass' => Kelas::className(), 'targetAttribute' => ['id_kelas' => 'id_kelas']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nis' => 'Nis',
            'nama_siswa' => 'Nama Siswa',
            'tanggal_lahir' => 'Tanggal Lahir',
            'alamat' => 'Alamat',
            'nama_orang_tua' => 'Nama Orang Tua',
            'nomor_hp' => 'Nomor Hp',
            'id_kelas' => 'Id Kelas',
            'email' => 'Email',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblNilais()
    {
        return $this->hasMany(TblNilai::className(), ['id_siswa' => 'nis']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdKelas()
    {
        return $this->hasOne(TblKelas::className(), ['id_kelas' => 'id_kelas']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblTugas()
    {
        return $this->hasMany(TblTugas::className(), ['id_siswa' => 'nis']);
    }
}
