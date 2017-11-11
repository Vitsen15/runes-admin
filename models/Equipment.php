<?php

namespace app\models;

/**
 * This is the model class for table "equipment".
 *
 * @property integer $type_id
 * @property string $type_name
 * @property integer $type_parent_id
 * @property string $description
 *
 * @property Equipment $typeParent
 * @property Equipment[] $equipments
 * @property WordsEquipment[] $wordsEquipments
 */
class Equipment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'equipment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type_id', 'type_name'], 'required'],
            [['type_id', 'type_parent_id'], 'integer'],
            [['type_name'], 'string', 'max' => 30],
            [['description'], 'string', 'max' => 50],
            [['type_parent_id'], 'exist', 'skipOnError' => true, 'targetClass' => Equipment::className(), 'targetAttribute' => ['type_parent_id' => 'type_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'type_id' => 'Type ID',
            'type_name' => 'Название',
            'type_parent_id' => 'Родительский тип',
            'description' => 'Тип',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTypeParent()
    {
        return $this->hasOne(Equipment::className(), ['type_id' => 'type_parent_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEquipments()
    {
        return $this->hasMany(Equipment::className(), ['type_parent_id' => 'type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWordsEquipments()
    {
        return $this->hasMany(WordsEquipment::className(), ['equipment_id' => 'type_id']);
    }
}
