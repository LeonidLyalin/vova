<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_person".
 *
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property integer $country_id
 * @property integer $parent_id
 *
 * @property TblCountry $country
 */
class Person extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'tbl_person';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
                [['first_name', 'last_name'], 'required'],
                [['country_id', 'parent_id'], 'integer'],
                [['first_name', 'last_name'], 'string', 'max' => 60],
                [['country_id'], 'exist', 'skipOnError' => true, 'targetClass' => Country::className(), 'targetAttribute' => ['country_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => Yii::t('app', 'Unique person identifier'),
            'first_name' => Yii::t('app', 'First name'),
            'last_name' => Yii::t('app', 'Last name'),
            'country_id' => Yii::t('app', 'Residing Country'),
            'parent_id' => Yii::t('app', 'Parent person identifier'),
            'fullName' => Yii::t('app', 'Full Name'),
            'countryName' => Yii::t('app', 'Country Name')
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    /* ActiveRelation */
    public function getCountry() {
        return $this->hasOne(Country::className(), ['id' => 'country_id']);
    }

    /* Getter for country name */

    public function getCountryName() {
        return $this->country->country_name;
    }

    /* Your model attribute labels */

    

    /* Getter for person full name */

    public function getFullName() {
        return $this->first_name . ' ' . $this->last_name;
    }

    /* Your model attribute labels */

  

}