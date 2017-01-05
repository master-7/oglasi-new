<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Advert;

/**
 * AdvertSearch represents the model behind the search form about `app\models\Advert`.
 */
class AdvertSearch extends Advert
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'cat_id', 'price', 'city_id', 'type', 'active', 'creator_id', 'video_id'], 'integer'],
            [['filter', 'title', 'text', 'map_coordinates', 'expdate', 'cdate', 'edate'], 'safe'],
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
        $query = Advert::find();

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
            'cat_id' => $this->cat_id,
            'price' => $this->price,
            'city_id' => $this->city_id,
            'type' => $this->type,
            //'expdate' => $this->expdate,
            'active' => $this->active,
            'creator_id' => $this->creator_id,
            'video_id' => $this->video_id,
            //'cdate' => $this->cdate,
            //'edate' => $this->edate,
        ]);

        $query->andFilterWhere(['like', 'filter', $this->filter])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'text', $this->text]);
            //->andFilterWhere(['like', 'map_coordinates', $this->map_coordinates]);

        return $dataProvider;
    }
}
