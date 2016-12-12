<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\PollsResult;

/**
 * PollsResultSearch represents the model behind the search form about `backend\models\PollsResult`.
 */
class PollsResultSearch extends PollsResult
{
    /**
     * @inheritdoc
     */
    public $answer;
    
    public function rules()
    {
        return [
            [['num', 'id_poll', 'id_answer'], 'integer'],
            [['answer'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        
        $query = PollsResult::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

         if (!($this->load($params) && $this->validate())) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
             $query->joinWith(['idAnswer']);
            return $dataProvider;
        }

        $query->joinWith('idAnswer');
        // grid filtering conditions
        $query->andFilterWhere([
            'num' => $this->num,
            'id_poll' => $this->id_poll,
            'id_answer' => $this->id_answer,
        ]);
        $query->andFilterWhere(['like','polls_answers.answer',$this->answer]);

        return $dataProvider;
    }
}
