<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cargo".
 *
 * @property string $cargo
 * @property boolean $administrador
 * @property boolean $operador
 * @property boolean $tecnico
 * @property boolean $asesor
 *
 * @property Usuario[] $usuarios
 */
class Cargo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cargo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cargo', 'administrador', 'operador', 'tecnico', 'asesor'], 'required', 'message' => 'El campo es obligatorio'],
            [['administrador', 'operador', 'tecnico', 'asesor'], 'boolean'],
            [['cargo'], 'string', 'max' => 25],
            [['cargo'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cargo' => 'Cargo',
            'administrador' => 'Administrador',
            'operador' => 'Operador',
            'tecnico' => 'Tecnico',
            'asesor' => 'Asesor',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuario::className(), ['cargo' => 'cargo']);
    }
}
