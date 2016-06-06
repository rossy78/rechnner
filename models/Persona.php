<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "persona".
 *
 * @property string $cedula
 * @property string $nombres
 * @property string $apellidos
 * @property integer $sexo
 * @property string $direccion
 * @property string $fecha_nacimiento
 * @property string $email
 *
 * @property TelefonoPersona[] $telefonoPersonas
 * @property Usuario $usuario
 */
class Persona extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'persona';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cedula', 'nombres', 'apellidos', 'sexo', 'direccion', 'fecha_nacimiento'], 'required', 'message' => 'El campo es obligatorio'],
            [['sexo'], 'integer'],
            [['fecha_nacimiento'], 'safe'],
            [['cedula', 'nombres', 'apellidos'], 'string', 'max' => 20],
            [['direccion'], 'string', 'max' => 200],
            [['email'], 'string', 'max' => 30],
            [['cedula'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cedula' => 'Cedula',
            'nombres' => 'Nombres',
            'apellidos' => 'Apellidos',
            'sexo' => 'Sexo',
            'direccion' => 'Direccion',
            'fecha_nacimiento' => 'Fecha Nacimiento',
            'email' => 'Email',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTelefonoPersonas()
    {
        return $this->hasMany(TelefonoPersona::className(), ['persona' => 'cedula']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuario()
    {
        return $this->hasOne(Usuario::className(), ['persona' => 'cedula']);
    }
}
