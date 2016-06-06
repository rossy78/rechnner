<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cita".
 *
 * @property integer $id_cita
 * @property integer $llamada
 * @property string $fecha
 * @property string $estado
 * @property string $tipo_cita
 * @property string $asignado_a
 * @property string $tipo_servicio
 * @property string $resultados
 * @property string $servicios_adicionales
 *
 * @property TipoServicios $tipoServicio
 * @property Llamada $llamada0
 * @property TipoCita $tipoCita
 * @property EstadoCita $estado0
 * @property Usuario $asignadoA
 * @property HistorialCita $historialCita
 */
class Cita extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cita';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['llamada', 'fecha', 'estado', 'tipo_cita', 'asignado_a', 'tipo_servicio'], 'required', 'message' => 'El campo es obligatorio'],
            [['llamada'], 'integer'],
            [['fecha'], 'safe'],
            [['estado', 'tipo_cita', 'tipo_servicio'], 'string', 'max' => 25],
            [['asignado_a'], 'string', 'max' => 20],
            [['resultados'], 'string', 'max' => 500],
            [['servicios_adicionales'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_cita' => 'Id Cita',
            'llamada' => 'Llamada',
            'fecha' => 'Fecha',
            'estado' => 'Status',
            'tipo_cita' => 'Tipo Cita',
            'asignado_a' => 'Asignado A',
            'tipo_servicio' => 'Tipo Servicio',
            'resultados' => 'Resultados',
            'servicios_adicionales' => 'Servicios Adicionales',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipoServicio()
    {
        return $this->hasOne(TipoServicios::className(), ['tipo_servicio' => 'tipo_servicio']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLlamada0()
    {
        return $this->hasOne(Llamada::className(), ['id_llamada' => 'llamada']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipoCita()
    {
        return $this->hasOne(TipoCita::className(), ['tipo_cita' => 'tipo_cita']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstado0()
    {
        return $this->hasOne(EstadoCita::className(), ['estado_cita' => 'estado']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAsignadoA()
    {
        return $this->hasOne(Usuario::className(), ['persona' => 'asignado_a']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHistorialCita()
    {
        return $this->hasOne(HistorialCita::className(), ['cita' => 'id_cita']);
    }
}
