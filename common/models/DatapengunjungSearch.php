<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Datapengunjung;

/**
 * DatapengunjungSearch represents the model behind the search form of `common\models\Datapengunjung`.
 */
class DatapengunjungSearch extends Datapengunjung
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pengunjung'], 'integer'],
            [['nama_lengkap', 'tanggal', 'waktu', 'keperluan'], 'safe'],
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
        $query = Datapengunjung::find();

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
            'id_pengunjung' => $this->id_pengunjung,
            'tanggal' => $this->tanggal,
            'waktu' => $this->waktu,
        ]);

        $query->andFilterWhere(['like', 'nama_lengkap', $this->nama_lengkap])
            ->andFilterWhere(['like', 'keperluan', $this->keperluan]);

        return $dataProvider;
    }
}
