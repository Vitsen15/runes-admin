<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * WordsEquipmentSearch represents the model behind the search form about `app\models\WordsEquipment`.
 */
class WordsEquipmentSearch extends WordsEquipment
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'runes_word_id', 'equipment_id'], 'integer'],
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
        $query = WordsEquipment::find()->with(['runesWord', 'equipment']);

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
            'runes_word_id' => $this->runes_word_id,
            'equipment_id' => $this->equipment_id,
        ]);

        return $dataProvider;
    }
}
