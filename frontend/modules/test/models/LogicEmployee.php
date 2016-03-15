<?php

namespace frontend\modules\test\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\modules\test\models\dao\DaoEmployee;

/**
 * LogicEmployee represents the model behind the search form about `frontend\modules\test\models\dao\DaoEmployee`.
 */
class LogicEmployee extends DaoEmployee
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'create_time', 'update_time'], 'integer'],
            [['num', 'sex', 'cname', 'ename', 'email', 'remark'], 'safe'],
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
        $query = DaoEmployee::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'create_time' => $this->create_time,
            'update_time' => $this->update_time,
        ]);

        $query->andFilterWhere(['like', 'num', $this->num])
            ->andFilterWhere(['like', 'sex', $this->sex])
            ->andFilterWhere(['like', 'cname', $this->cname])
            ->andFilterWhere(['like', 'ename', $this->ename])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'remark', $this->remark]);

        return $dataProvider;
    }
}
