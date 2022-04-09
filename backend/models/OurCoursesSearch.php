<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\OurCourses;

/**
 * OurCoursesSearch represents the model behind the search form of `backend\models\OurCourses`.
 */
class OurCoursesSearch extends OurCourses
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id','enrolled'], 'integer'],
            [['date', 'name_uz', 'name_ru', 'name_en', 'content_uz', 'content_ru', 'content_en', 'image','emrollrd'], 'safe'],
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
        $query = OurCourses::find();

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

        $query->andFilterWhere(['like', 'date', $this->date])
            ->andFilterWhere(['like', 'name_uz', $this->name_uz])
            ->andFilterWhere(['like', 'name_ru', $this->name_ru])
            ->andFilterWhere(['like', 'name_en', $this->name_en])
            ->andFilterWhere(['like', 'content_uz', $this->content_uz])
            ->andFilterWhere(['like', 'content_ru', $this->content_ru])
            ->andFilterWhere(['like', 'content_en', $this->content_en])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like','enrolled',$this->enrolled])
            ->andFilterWhere(['type', 'type', $this->type]);

        return $dataProvider;
    }
}
