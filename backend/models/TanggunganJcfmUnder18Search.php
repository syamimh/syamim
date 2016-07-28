<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TanggunganJcfmUnder18;

/**
 * TanggunganJcfmUnder18Search represents the model behind the search form about `backend\models\TanggunganJcfmUnder18`.
 */
class TanggunganJcfmUnder18Search extends TanggunganJcfmUnder18
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_jcfm_under_18'], 'integer'],
            [['nama', 'no_ic', 'bangsa', 'warganegara', 'jantina', 'no_kad_oku', 'hubungan'], 'safe'],
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
        $query = TanggunganJcfmUnder18::find();

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
            'id' => $this->id,
            'id_jcfm_under_18' => $this->id_jcfm_under_18,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'no_ic', $this->no_ic])
            ->andFilterWhere(['like', 'bangsa', $this->bangsa])
            ->andFilterWhere(['like', 'warganegara', $this->warganegara])
            ->andFilterWhere(['like', 'jantina', $this->jantina])
            ->andFilterWhere(['like', 'no_kad_oku', $this->no_kad_oku])
            ->andFilterWhere(['like', 'hubungan', $this->hubungan]);

        return $dataProvider;
    }
}
