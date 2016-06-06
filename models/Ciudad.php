<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ciudad".
 *
 * @property string $ciudad
 * @property string $estado
 * @property string $pais
 *
 * @property Estado $estado0
 * @property Cliente[] $clientes
 * @property Empresa[] $empresas
 */
class Ciudad extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ciudad';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ciudad', 'estado', 'pais'], 'required', 'message' => 'El campo es obligatorio'],
            [['ciudad', 'estado', 'pais'], 'string', 'max' => 50],
            [['ciudad'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ciudad' => 'Ciudad',
            'estado' => 'Estado',
            'pais' => 'Pais',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstado0()
    {
        return $this->hasOne(Estado::className(), ['estado' => 'estado', 'pais' => 'pais']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClientes()
    {
        return $this->hasMany(Cliente::className(), ['ciudad' => 'ciudad']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmpresas()
    {
        return $this->hasMany(Empresa::className(), ['ciudad' => 'ciudad']);
    }
}
