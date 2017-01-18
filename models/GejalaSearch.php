<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Gejala;

/**
 * GejalaSearch represents the model behind the search form about `app\models\Gejala`.
 */
class GejalaSearch extends Gejala
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kd_gejala', 'nm_gejala', 'pertanyaan'], 'safe'],
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
        $query = Gejala::find();

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
        $query->andFilterWhere(['like', 'kd_gejala', $this->kd_gejala])
            ->andFilterWhere(['like', 'nm_gejala', $this->nm_gejala])
            ->andFilterWhere(['like', 'pertanyaan', $this->pertanyaan]);

        return $dataProvider;
    }
}
