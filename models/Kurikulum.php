<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_kurikulum".
 *
 * @property integer $id_kurikulum
 * @property integer $nip
 * @property integer $id_kelas
 * @property integer $id_mapel
 * @property integer $id_tahun_ajaran
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
            [['nip', 'id_kelas', 'id_mapel', 'id_tahun_ajaran'], 'required'],
            [['nip', 'id_kelas', 'id_mapel', 'id_tahun_ajaran'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_kurikulum' => 'Id Kurikulum',
            'nip' => 'Nip',
            'id_kelas' => 'Id Kelas',
            'id_mapel' => 'Id Mapel',
            'id_tahun_ajaran' => 'Id Tahun Ajaran',
        ];
    }
}
