<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Rules;

/**
 * RulesSearch represents the model behind the search form about `app\models\Rules`.
 */
class RulesSearch extends Rules
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kd_rules', 'jika', 'maka'], 'safe'],
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
        $query = Rules::find();

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
        $query->andFilterWhere(['like', 'kd_rules', $this->kd_rules])
            ->andFilterWhere(['like', 'jika', $this->jika])
            ->andFilterWhere(['like', 'maka', $this->maka]);

        return $dataProvider;
    }
}
