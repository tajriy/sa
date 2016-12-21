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
 * @property integer $id_keahlian
 * @property integer $pendidikan
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
            [['nip', 'nama_guru', 'alamat', 'nomor_hp', 'id_status', 'email', 'password', 'tgl_lahir', 'id_keahlian', 'pendidikan'], 'required'],
            [['nip', 'nomor_hp', 'id_status', 'id_keahlian', 'pendidikan'], 'integer'],
            [['alamat', 'email', 'password'], 'string'],
            [['tgl_lahir'], 'safe'],
            [['nama_guru'], 'string', 'max' => 30],
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
            'id_keahlian' => 'Id Keahlian',
            'pendidikan' => 'Pendidikan',
        ];
    }
}
