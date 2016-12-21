<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Siswa;

/**
 * SiswaSearch represents the model behind the search form about `app\models\Siswa`.
 */
class SiswaSearch extends Siswa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nis', 'nomor_hp', 'id_kelas'], 'integer'],
            [['nama_siswa', 'tanggal_lahir', 'alamat', 'nama_orang_tua', 'email'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Siswa::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'nis' => $this->nis,
            'tanggal_lahir' => $this->tanggal_lahir,
            'nomor_hp' => $this->nomor_hp,
            'id_kelas' => $this->id_kelas,
        ]);

        $query->andFilterWhere(['like', 'nama_siswa', $this->nama_siswa])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'nama_orang_tua', $this->nama_orang_tua])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}
