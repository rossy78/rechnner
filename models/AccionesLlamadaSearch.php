<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AccionesLlamada;

/**
 * AccionesLlamadaSearch represents the model behind the search form about `app\models\AccionesLlamada`.
 */
class AccionesLlamadaSearch extends AccionesLlamada
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_llamada'], 'integer'],
            [['accion', 'estado', 'fecha'], 'safe'],
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
        $query = AccionesLlamada::find();

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
            'id_llamada' => $this->id_llamada,
            'fecha' => $this->fecha,
        ]);

        $query->andFilterWhere(['like', 'accion', $this->accion])
            ->andFilterWhere(['like', 'estado', $this->estado]);

        return $dataProvider;
    }
}
