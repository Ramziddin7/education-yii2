<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Events;

/**
 * EventsSearch represents the model behind the search form of `backend\models\Events`.
 */
class EventsSearch extends Events
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['title_uz', 'title_ru', 'title_en', 'moreinformation_uz', 'moreinformation_ru', 'moreinformation_en', 'date', 'where_uz', 'where_ru', 'where_en', 'video', 'facelogo_video'], 'safe'],
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
        $query = Events::find();

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
        ]);

        $query->andFilterWhere(['like', 'title_uz', $this->title_uz])
            ->andFilterWhere(['like', 'title_ru', $this->title_ru])
            ->andFilterWhere(['like', 'title_en', $this->title_en])
            ->andFilterWhere(['like', 'moreinformation_uz', $this->moreinformation_uz])
            ->andFilterWhere(['like', 'moreinformation_ru', $this->moreinformation_ru])
            ->andFilterWhere(['like', 'moreinformation_en', $this->moreinformation_en])
            ->andFilterWhere(['like', 'date', $this->date])
            ->andFilterWhere(['like', 'where_uz', $this->where_uz])
            ->andFilterWhere(['like', 'where_ru', $this->where_ru])
            ->andFilterWhere(['like', 'where_en', $this->where_en])
            ->andFilterWhere(['like', 'video', $this->video])
            ->andFilterWhere(['like', 'facelogo_video', $this->facelogo_video]);

        return $dataProvider;
    }
}
