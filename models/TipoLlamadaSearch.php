<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TipoLlamada;

/**
 * TipoLlamadaSearch represents the model behind the search form about `app\models\TipoLlamada`.
 */
class TipoLlamadaSearch extends TipoLlamada
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tipo_llamada'], 'safe'],
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
        $query = TipoLlamada::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere(['like', 'tipo_llamada', $this->tipo_llamada]);

        return $dataProvider;
    }
}
