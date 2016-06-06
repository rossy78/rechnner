<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "historial_cita".
 *
 * @property integer $cita
 * @property string $fecha
 * @property string $motivo
 * @property string $usuario
 *
 * @property Usuario $usuario0
 * @property Cita $cita0
 */
class HistorialCita extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'historial_cita';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fecha', 'motivo', 'usuario'], 'required', 'message' => 'El campo es obligatorio'],
            [['fecha'], 'safe'],
            [['motivo'], 'string', 'max' => 100],
            [['usuario'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cita' => 'Cita',
            'fecha' => 'Fecha',
            'motivo' => 'Motivo',
            'usuario' => 'Usuario',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuario0()
    {
        return $this->hasOne(Usuario::className(), ['persona' => 'usuario']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCita0()
    {
        return $this->hasOne(Cita::className(), ['id_cita' => 'cita']);
    }
}
