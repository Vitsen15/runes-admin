<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "words".
 *
 * @property string $id
 * @property string $name
 *
 * @property WordProperties[] $wordProperties
 */
class Words extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'words';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWordProperties()
    {
        return $this->hasMany(WordProperties::className(), ['word_id' => 'id']);
    }
}
