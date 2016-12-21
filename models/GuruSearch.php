<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Guru;

/**
 * GuruSearch represents the model behind the search form about `app\models\Guru`.
 */
class GuruSearch extends Guru
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nip', 'nomor_hp', 'id_status', 'id_keahlian', 'pendidikan'], 'integer'],
            [['nama_guru', 'alamat', 'email', 'password', 'tgl_lahir'], 'safe'],
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
        $query = Guru::find();

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
            'nip' => $this->nip,
            'nomor_hp' => $this->nomor_hp,
            'id_status' => $this->id_status,
            'tgl_lahir' => $this->tgl_lahir,
            'id_keahlian' => $this->id_keahlian,
            'pendidikan' => $this->pendidikan,
        ]);

        $query->andFilterWhere(['like', 'nama_guru', $this->nama_guru])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'password', $this->password]);

        return $dataProvider;
    }
}
