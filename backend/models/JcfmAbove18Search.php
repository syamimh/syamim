<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\JcfmAbove18;

/**
 * JcfmAbove18Search represents the model behind the search form about `backend\models\JcfmAbove18`.
 */
class JcfmAbove18Search extends JcfmAbove18
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'poskod', 'daerah', 'negeri'], 'integer'],
            [['nama', 'no_ic', 'bangsa', 'warganegara', 'jantina', 'tarikh_lahir', 'tempat_lahir', 'no_kad_oku', 'alamat', 'lesen_kenderaan', 'no_fon_rumah', 'no_fon_bimbit', 'nama_pusat_latihan', 'sebab', 'hasrat'], 'safe'],
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
        $query = JcfmAbove18::find();

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
            'poskod' => $this->poskod,
            'daerah' => $this->daerah,
            'negeri' => $this->negeri,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'no_ic', $this->no_ic])
            ->andFilterWhere(['like', 'bangsa', $this->bangsa])
            ->andFilterWhere(['like', 'warganegara', $this->warganegara])
            ->andFilterWhere(['like', 'jantina', $this->jantina])
            ->andFilterWhere(['like', 'tarikh_lahir', $this->tarikh_lahir])
            ->andFilterWhere(['like', 'tempat_lahir', $this->tempat_lahir])
            ->andFilterWhere(['like', 'no_kad_oku', $this->no_kad_oku])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'lesen_kenderaan', $this->lesen_kenderaan])
            ->andFilterWhere(['like', 'no_fon_rumah', $this->no_fon_rumah])
            ->andFilterWhere(['like', 'no_fon_bimbit', $this->no_fon_bimbit])
            ->andFilterWhere(['like', 'nama_pusat_latihan', $this->nama_pusat_latihan])
            ->andFilterWhere(['like', 'sebab', $this->sebab])
            ->andFilterWhere(['like', 'hasrat', $this->hasrat]);

        return $dataProvider;
    }
}
