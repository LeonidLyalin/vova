<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "polls".
 *
 * @property integer $id
 * @property string $question
 * @property string $date_beg
 * @property string $date_end
 * @property integer $allow_mulitple
 * @property integer $is_random
 * @property integer $anonymous
 * @property integer $show_vote
 *
 * @property PollsAnswers[] $pollsAnswers
 */
class Polls extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'polls';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
                [['question', 'date_beg', 'date_end'], 'required'], //'allow_mulitple', 'is_random', 'anonymous', 'show_vote' - по умолчанию
            [['question'], 'string'],
                [['date_beg', 'date_end'], 'safe'],
                [['allow_mulitple', 'is_random', 'anonymous', 'show_vote'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => Yii::t('app', '№ poll'),
            'question' => Yii::t('app', 'Question'),
            'date_beg' => Yii::t('app', 'Date begin'),
            'date_end' => Yii::t('app', 'Date end'),
            'allow_mulitple' => Yii::t('app', 'Multiple answer'),
            'is_random' => Yii::t('app', 'Random order'),
            'anonymous' => Yii::t('app', 'Anonymous answers'),
             'show_vote' => Yii::t('app', 'Show vote results'),
            //'allowMulitpleLabel' => Yii::t('app', 'Multiple answer'),
            //'anonymousLabel' > Yii::t('app', 'Anonymous answers'),
            //'isRandomLabel' => Yii::t('app', 'Random order'),
           // 'showVoteLabel' => Yii::t('app', 'Show number of votes'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */

    /**
     * 
     * @return type
     */
    public function getPollsAnswers() {
        return $this->hasMany(PollsAnswers::className(), ['id_poll' => 'id']);
    }

    /**
     * Return Yes/No for anonymous field (Tinyint)
     * @return type sting
     */
//    public function getAnonymousLabel() {
//        return $this->anonymous ? Yii::t('app', 'Yes') : Yii::t('app', 'No');
//    }
//
//    /**
//     * Return Yes/No for is_random field (Tinyint)
//     * @return type sting
//     */
//    public function getIsRandomLabel() {
//        return $this->is_random ? Yii::t('app', 'Yes') : Yii::t('app', 'No');
//    }
//
//    /**
//     * Return Yes/No for show_vote field (Tinyint)
//     * @return type sting
//     */
//    public function getShowVoteLabel() {
//       // return $this->show_vote=0 ? Yii::t('app', 'false') : Yii::t('app', 'true');
//        return $this->show_vote;//=0 ? false : true;
//    }
//    
//    /**
//     * Return Yes/No for allow_multiple field (Tinyint)
//     * @return type sting
//     */
//    public function getAllowMultipleLabel() {
//        return $this->allow_mulitple=0 ? Yii::t('app', 'true') : Yii::t('app', 'false');
//    }


}
