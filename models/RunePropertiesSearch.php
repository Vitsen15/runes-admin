<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\RuneProperties;

/**
 * RunePropertiesSearch represents the model behind the search form about `app\models\RuneProperties`.
 */
class RunePropertiesSearch extends RuneProperties
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'in_weapon', 'in_armour'], 'integer'],
            [['property'], 'safe'],
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
        $query = RuneProperties::find();

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
            'in_weapon' => $this->in_weapon,
            'in_armour' => $this->in_armour,
        ]);

        $query->andFilterWhere(['like', 'property', $this->property]);

        return $dataProvider;
    }
}
