<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Sortableleads;

/**
 * SortableleadsSearch represents the model behind the search form about `app\models\Sortableleads`.
 */
class SortableleadsSearch extends Sortableleads
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['col1', 'col2', 'col3', 'col4', 'col5'], 'safe'],
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
        $query = Sortableleads::find();

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
        ]);

        $query->andFilterWhere(['like', 'col1', $this->col1])
            ->andFilterWhere(['like', 'col2', $this->col2])
            ->andFilterWhere(['like', 'col3', $this->col3])
            ->andFilterWhere(['like', 'col4', $this->col4])
            ->andFilterWhere(['like', 'col5', $this->col5]);

        return $dataProvider;
    }
}
