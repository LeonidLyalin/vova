<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "polls_result".
 *
 * @property integer $num
 * @property integer $id_poll
 * @property integer $id_answer
 * @property integer $id_user
 */
class PollsResult extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    
    /**
     * @var field allow_multiple in polls is true
     */
    
    //const SCENARIO_MULTIPLE='allow_multiple';
    
    /**
     * @var field allow_multiple in polls is false
     */
  //  const SCENARIO_SINGLE='not_allow_multiple';
    /**
     *
     * @property array for checkboxlist checked items
     * 
     * @todo make this property to work in form checkBoxList instead of 'id_poll'
     */
    //public $result;
    
    public static function tableName()
    {
        return 'polls_result';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
           [['num', 'id_poll', 'id_answer', 'id_user'], 'integer'],
            [['id_poll', 'id_answer', 'id_user'], 'required'],
////            
//            [['num', 'id_poll', 'id_answer', 'id_user'], 'integer','on'=>self::SCENARIO_SINGLE],
//            [['id_poll', 'id_answer', 'id_user'], 'required','on'=>self::SCENARIO_SINGLE],
//        
//                
//                [['num', 'id_poll',  'id_user'], 'integer','on'=>self::SCENARIO_MULTIPLE],
//            [['id_poll', 'id_answer', 'id_user'], 'required','on'=>self::SCENARIO_MULTIPLE],
        
                
                ];
    }

    /**
     * 
     * @return scenario for 
     */
//    public function scenarios()
//    {
//        return [
//            'default' =>['num', 'id_poll', 'id_answer', 'id_user'],
//            self::SCENARIO_SINGLE => ['num', 'id_poll', 'id_answer', 'id_user'],
//            self::SCENARIO_MULTIPLE => ['num', 'id_poll', 'id_user'],
//        ];
//    }
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'num' => Yii::t('app', 'Number of answers'),
            'id_poll' => Yii::t('app', '№ poll'),
            'id_answer' => Yii::t('app', '№ ответа'),
            'id_user' => Yii::t('app', 'Id User'),
        ];
    }

    /**
     * @inheritdoc
     * @return PollsResultQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PollsResultQuery(get_called_class());
    }
}
