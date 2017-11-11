<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "property_effect".
 *
 * @property integer $id
 * @property string $effect_type
 *
 * @property WordProperties[] $wordProperties
 */
class PropertyEffect extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'property_effect';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['effect_type'], 'string', 'max' => 8],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'effect_type' => 'Effect Type',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWordProperties()
    {
        return $this->hasMany(WordProperties::className(), ['property_effect_id' => 'id']);
    }
}
