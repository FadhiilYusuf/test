<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Wilayah;

/**
 * WilayahSearch represents the model behind the search form of `app\models\Wilayah`.
 */
class WilayahSearch extends Wilayah
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_wilayah', 'jumlah_populasi'], 'integer'],
            [['kd_wilayah', 'nama_wilayah', 'luas_wilayah', 'tanggal_pendirian', 'deskripsi_wilayah'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Wilayah::find();

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
            'id_wilayah' => $this->id_wilayah,
            'jumlah_populasi' => $this->jumlah_populasi,
            'tanggal_pendirian' => $this->tanggal_pendirian,
        ]);

        $query->andFilterWhere(['like', 'kd_wilayah', $this->kd_wilayah])
            ->andFilterWhere(['like', 'nama_wilayah', $this->nama_wilayah])
            ->andFilterWhere(['like', 'luas_wilayah', $this->luas_wilayah])
            ->andFilterWhere(['like', 'deskripsi_wilayah', $this->deskripsi_wilayah]);

        return $dataProvider;
    }
}
