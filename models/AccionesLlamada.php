<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "acciones_llamada".
 *
 * @property integer $id_llamada
 * @property string $accion
 * @property string $estado
 * @property string $fecha
 *
 * @property Llamada $idLlamada
 * @property EstadoCitaAccion $estado0
 */
class AccionesLlamada extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'acciones_llamada';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['accion', 'estado', 'fecha'], 'required', 'message' => 'El campo es obligatorio'],
            [['fecha'], 'safe'],
            [['accion'], 'string', 'max' => 100],
            [['estado'], 'string', 'max' => 25]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_llamada' => 'Id Llamada',
            'accion' => 'Accion',
            'estado' => 'Estado',
            'fecha' => 'Fecha',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdLlamada()
    {
        return $this->hasOne(Llamada::className(), ['id_llamada' => 'id_llamada']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstado0()
    {
        return $this->hasOne(EstadoCitaAccion::className(), ['estado_cita_accion' => 'estado']);
    }
}
