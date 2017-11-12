<?php

namespace app\models;

/**
 * This is the model class for table "rune_properties".
 *
 * @property integer $id
 * @property string $property
 * @property integer $in_weapon
 * @property integer $in_armour
 *
 * @property RunesRuneProperties[] $runesRuneProperties
 */
class RuneProperties extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rune_properties';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['property'], 'required'],
            [['in_weapon', 'in_armour'], 'integer'],
            [['property'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'property' => 'Название',
            'in_weapon' => 'В оружии',
            'in_armour' => 'В броне',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRunesRuneProperties()
    {
        return $this->hasMany(RunesRuneProperties::className(), ['property_id' => 'id']);
    }
}
