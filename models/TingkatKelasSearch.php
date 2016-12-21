<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TingkatKelas;

/**
 * TingkatKelasSearch represents the model behind the search form about `app\models\TingkatKelas`.
 */
class TingkatKelasSearch extends TingkatKelas
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_tingkat', 'nama_tingkat'], 'integer'],
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
        $query = TingkatKelas::find();

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
            'id_tingkat' => $this->id_tingkat,
            'nama_tingkat' => $this->nama_tingkat,
        ]);

        return $dataProvider;
    }
}
