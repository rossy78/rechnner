<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "estado_cita_accion".
 *
 * @property string $estado_cita_accion
 *
 * @property AccionesLlamada[] $accionesLlamadas
 * @property Cita[] $citas
 */
class EstadoCitaAccion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'estado_cita_accion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['estado_cita_accion'], 'required', 'message' => 'El campo es obligatorio'],
            [['estado_cita_accion'], 'string', 'max' => 25],
            [['estado_cita_accion'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'estado_cita_accion' => 'Estado Cita Accion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccionesLlamadas()
    {
        return $this->hasMany(AccionesLlamada::className(), ['estado' => 'estado_cita_accion']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCitas()
    {
        return $this->hasMany(Cita::className(), ['estado' => 'estado_cita_accion']);
    }
}
