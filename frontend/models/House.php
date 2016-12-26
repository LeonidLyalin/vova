<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "house".
 *
 * @property integer $id
 * @property string $street
 * @property integer $number
 * @property string $letter
 */
class House extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'house';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['streed','adress'], 'required'],
           // [['street', 'number'], 'required'],
            [['street','adress'], 'string'],
           // [['number'], 'integer'],
         //   [['letter'], 'string', 'max' => 2],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('frontend', 'ID'),
            'street' => Yii::t('frontend', 'Street'),
            'adress'=> Yii::t('frontend', 'House'),
           // 'number' => Yii::t('app', 'Номер'),
           // 'letter' => Yii::t('app', 'Буква'),
        ];
    }

    /**
     * @inheritdoc
     * @return HouseQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new HouseQuery(get_called_class());
    }
    
    public function getAdress() {
        return trim((string) $this->number) . trim((string)$this->letter);
        
    }
}
