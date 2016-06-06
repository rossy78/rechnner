<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "llamada".
 *
 * @property integer $id_llamada
 * @property string $cliente
 * @property string $tipo_llamada
 * @property string $fecha
 * @property integer $duracion
 * @property string $operador
 * @property string $tipo_solicitud
 * @property string $contacto
 * @property string $email
 * @property string $sucursal
 * @property string $nota
 * @property boolean $remoto
 *
 * @property AccionesLlamada $accionesLlamada
 * @property Cita[] $citas
 * @property Sucursal $sucursal0
 * @property Cliente $cliente0
 * @property TipoLlamada $tipoLlamada
 * @property TipoSolicitud $tipoSolicitud
 * @property Usuario $operador0
 * @property LlamadaProducto[] $llamadaProductos
 * @property Producto[] $idProductos
 */
class Llamada extends \yii\db\ActiveRecord
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'llamada';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cliente', 'tipo_llamada', 'fecha', 'duracion', 'operador', 'tipo_solicitud', 'contacto', 'email', 'sucursal', 'nota', 'remoto'], 'required', 'message' => 'El campo {attribute} es obligatorio'],
            [['fecha'], 'safe'],
            [['duracion'], 'integer'],
            [['remoto'], 'boolean'],
            [['cliente'], 'string', 'max' => 15],
            [['tipo_llamada', 'tipo_solicitud', 'contacto'], 'string', 'max' => 25],
            [['operador'], 'string', 'max' => 20],
            [['email'], 'string', 'max' => 30],
            [['sucursal'], 'string', 'max' => 50],
            [['nota'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_llamada' => 'Id Llamada',
            'cliente' => 'Cliente',
            'tipo_llamada' => 'Tipo Llamada',
            'fecha' => 'Fecha',
            'duracion' => 'Duracion',
            'operador' => 'Operador',
            'tipo_solicitud' => 'Tipo Solicitud',
            'contacto' => 'Contacto',
            'email' => 'Email',
            'sucursal' => 'Sucursal',
            'nota' => 'Nota',
            'remoto' => 'Remoto',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccionesLlamada()
    {
        return $this->hasOne(AccionesLlamada::className(), ['id_llamada' => 'id_llamada']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCitas()
    {
        return $this->hasMany(Cita::className(), ['llamada' => 'id_llamada']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSucursal0()
    {
        return $this->hasOne(Sucursal::className(), ['sucursal' => 'sucursal']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCliente0()
    {
        return $this->hasOne(Cliente::className(), ['rif' => 'cliente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipoLlamada()
    {
        return $this->hasOne(TipoLlamada::className(), ['tipo_llamada' => 'tipo_llamada']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipoSolicitud()
    {
        return $this->hasOne(TipoSolicitud::className(), ['tipo_solicitud' => 'tipo_solicitud']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOperador0()
    {
        return $this->hasOne(Usuario::className(), ['persona' => 'operador']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLlamadaProductos()
    {
        return $this->hasMany(LlamadaProducto::className(), ['lid_llamada' => 'id_llamada']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdProductos()
    {
        return $this->hasMany(Producto::className(), ['id_producto' => 'id_producto'])->viaTable('llamada_producto', ['lid_llamada' => 'id_llamada']);
    }

    public function getDuration()
    {
        $timeDiff = $this->duracion;
        $timeDiff /= 1000;
        $seconds = (int)($timeDiff % 60);
        $timeDiff = (int)($timeDiff / 60);
        $minutes = (int)($timeDiff % 60);
        $timeDiff = (int)($timeDiff / 60);
        $hours = (int)($timeDiff % 24);
        $timeDiff = (int)($timeDiff / 24);
        
        return $hours.":".$minutes.":".$seconds;
    }

}
