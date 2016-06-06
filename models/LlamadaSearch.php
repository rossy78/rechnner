<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Llamada;

/**
 * LlamadaSearch represents the model behind the search form about `app\models\Llamada`.
 */
class LlamadaSearch extends Llamada
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_llamada', 'cliente', 'duracion'], 'integer'],
            [['tipo_llamada', 'fecha', 'operador', 'tipo_solicitud', 'contacto', 'email', 'sucursal', 'nota'], 'safe'],
            [['remoto'], 'boolean'],
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
        $query = Llamada::find();

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
            'cliente' => $this->cliente,
            'fecha' => $this->fecha,
            'duracion' => $this->duracion,
            'remoto' => $this->remoto,
        ]);

        $query->andFilterWhere(['like', 'tipo_llamada', $this->tipo_llamada])
            ->andFilterWhere(['like', 'operador', $this->operador])
            ->andFilterWhere(['like', 'tipo_solicitud', $this->tipo_solicitud])
            ->andFilterWhere(['like', 'contacto', $this->contacto])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'sucursal', $this->sucursal])
            ->andFilterWhere(['like', 'nota', $this->nota]);

        return $dataProvider;
    }
}
