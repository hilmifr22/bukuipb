<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tabel;

/**
 * TabelSearch represents the model behind the search form of `app\models\Tabel`.
 */
class TabelSearch extends Tabel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['no', 'Tahun_Terbit'], 'integer'],
            [['Nama_Buku', 'Nama_Penulis', 'Tampat_Terbit', 'Nama_Penerbit'], 'safe'],
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
        $query = Tabel::find();

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
            'no' => $this->no,
            'Tahun_Terbit' => $this->Tahun_Terbit,
        ]);

        $query->andFilterWhere(['like', 'Nama_Buku', $this->Nama_Buku])
            ->andFilterWhere(['like', 'Nama_Penulis', $this->Nama_Penulis])
            ->andFilterWhere(['like', 'Tampat_Terbit', $this->Tampat_Terbit])
            ->andFilterWhere(['like', 'Nama_Penerbit', $this->Nama_Penerbit]);

        return $dataProvider;
    }
}
