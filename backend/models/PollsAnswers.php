<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "polls_answers".
 *
 * @property integer $id
 * @property integer $id_poll
 * @property string $answer
 *
 * @property Polls $idPoll
 * @property PollsResult[] $pollsResults
 * @property Polls[] $idPolls
 */
class PollsAnswers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'polls_answers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_poll', 'answer'], 'required'],
            [['id_poll'], 'integer'],
            [['answer'], 'string'],
           
         //   [['id_poll'], 'exist', 'skipOnError' => true, 'targetClass' => Polls::className(), 'targetAttribute' => ['id_poll' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', '№'),
            'id_poll' => Yii::t('app', '№ poll'),
            'answer' => Yii::t('app', 'Answer'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPoll()
    {
        return $this->hasOne(Polls::className(), ['id' => 'id_poll']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPollsResults()
    {
        return $this->hasMany(PollsResult::className(), ['id_answer' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPolls()
    {
        return $this->hasMany(Polls::className(), ['id' => 'id_poll'])->viaTable('polls_result', ['id_answer' => 'id']);
    }

    /**
     * @inheritdoc
     * @return PollsAnswersQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PollsAnswersQuery(get_called_class());
    }
}
