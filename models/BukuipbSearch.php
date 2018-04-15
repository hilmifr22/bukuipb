<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Bukuipb;

/**
 * BukuipbSearch represents the model behind the search form of `app\models\Bukuipb`.
 */
class BukuipbSearch extends Bukuipb
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['no', 'Tahun Terbit'], 'integer'],
            [['Nama Buku', 'Nama Penulis', 'Tampat Terbit', 'Nama Penerbit'], 'safe'],
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
        $query = Bukuipb::find();

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
            'Tahun Terbit' => $this->Tahun Terbit,
        ]);

        $query->andFilterWhere(['like', 'Nama Buku', $this->Nama Buku])
            ->andFilterWhere(['like', 'Nama Penulis', $this->Nama Penulis])
            ->andFilterWhere(['like', 'Tampat Terbit', $this->Tampat Terbit])
            ->andFilterWhere(['like', 'Nama Penerbit', $this->Nama Penerbit]);

        return $dataProvider;
    }
}
