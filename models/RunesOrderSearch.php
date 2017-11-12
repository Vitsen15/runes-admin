<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * RunesOrderSearch represents the model behind the search form about `app\models\RunesOrder`.
 */
class RunesOrderSearch extends RunesOrder
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'rune_id', 'runes_word_id', 'rune_order'], 'integer'],
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
        $query = RunesOrder::find()->with(['rune', 'runesWord']);

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
            'rune_id' => $this->rune_id,
            'runes_word_id' => $this->runes_word_id,
            'rune_order' => $this->rune_order,
        ]);

        return $dataProvider;
    }
}
