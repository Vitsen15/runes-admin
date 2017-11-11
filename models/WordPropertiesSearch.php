<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\WordProperties;

/**
 * WordPropertiesSearch represents the model behind the search form about `app\models\WordProperties`.
 */
class WordPropertiesSearch extends WordProperties
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'word_id', 'property_type_id', 'property_effect_id', 'property_value_type_id', 'property_duration', 'property_min_value', 'property_max_value'], 'integer'],
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
        $query = WordProperties::find();

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
            'word_id' => $this->word_id,
            'property_type_id' => $this->property_type_id,
            'property_effect_id' => $this->property_effect_id,
            'property_value_type_id' => $this->property_value_type_id,
            'property_duration' => $this->property_duration,
            'property_min_value' => $this->property_min_value,
            'property_max_value' => $this->property_max_value,
        ]);

        return $dataProvider;
    }
}
