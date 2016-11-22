<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "polls".
 *
 * @property integer $id
 * @property string $question
 * @property string $date_beg
 * @property integer $date_end
 *
 * @property PollsAnswers $pollsAnswers
 * @property PollsResult $pollsResult
 * @property PollsAnswers[] $idAnswers
 */
class Polls extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'polls';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'question', 'date_beg', 'date_end'], 'required'],
            [['id'], 'integer'],
            [['question'], 'string'],
            [['date_beg', 'date_end'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', '№ опроса'),
            'question' => Yii::t('app', 'вопрос в опросе1'),
            'date_beg' => Yii::t('app', 'начало опроса'),
            'date_end' => Yii::t('app', 'окончание опроса'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPollsAnswers()
    {
       
        return 
        $this->hasOne(PollsAnswers::className(), ['id_poll' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPollsResult()
    {
        return $this->hasOne(PollsResult::className(), ['id_poll' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdAnswers()
    {
        return $this->hasMany(PollsAnswers::className(), ['id' => 'id_answer'])->viaTable('polls_result', ['id_poll' => 'id']);
    }
}
