<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Kurikulum;

/**
 * KurikulumSearch represents the model behind the search form about `app\models\Kurikulum`.
 */
class KurikulumSearch extends Kurikulum
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_kurikulum', 'nip', 'id_kelas', 'id_mapel', 'id_tahun_ajaran'], 'integer'],
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
        $query = Kurikulum::find();

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
            'id_kurikulum' => $this->id_kurikulum,
            'nip' => $this->nip,
            'id_kelas' => $this->id_kelas,
            'id_mapel' => $this->id_mapel,
            'id_tahun_ajaran' => $this->id_tahun_ajaran,
        ]);

        return $dataProvider;
    }
}
