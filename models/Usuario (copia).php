<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property string $persona
 * @property string $login
 * @property string $password
 * @property integer $logged_in
 * @property string $cargo
 *
 * @property Cita[] $citas
 * @property HistorialCita[] $historialCitas
 * @property Operador $operador
 * @property Persona $persona0
 * @property Cargo $cargo0
 * @property UsuarioGrupo[] $usuarioGrupos
 * @property Grupo[] $grupos
 */
class Usuario extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['persona', 'login', 'password', 'logged_in', 'cargo'], 'required', 'message' => 'El campo es obligatorio'],
            [['logged_in'], 'integer'],
            [['persona'], 'string', 'max' => 20],
            [['login', 'cargo'], 'string', 'max' => 25],
            [['password'], 'string', 'max' => 256],
            [['persona'], 'unique'],
            [['login'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'persona' => 'Persona',
            'login' => 'Login',
            'password' => 'Password',
            'logged_in' => 'Logged In',
            'cargo' => 'Cargo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCitas()
    {
        return $this->hasMany(Cita::className(), ['asignado_a' => 'persona']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHistorialCitas()
    {
        return $this->hasMany(HistorialCita::className(), ['usuario' => 'persona']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOperador()
    {
        return $this->hasOne(Operador::className(), ['persona' => 'persona']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersona0()
    {
        return $this->hasOne(Persona::className(), ['cedula' => 'persona']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCargo0()
    {
        return $this->hasOne(Cargo::className(), ['cargo' => 'cargo']);
    }
    
    public function isOperador()
    {
        return $this->cargo0->operador;
    }
    
    public function isTecnico()
    {
        return $this->cargo0->tecnico;
    }
    
    public function isAdministrador()
    {
        return $this->cargo0->administrador;
    }
    
    public function isAsesor()
    {
        return $this->cargo0->asesor;
    }

    public function getAuthKey()
    {
        throw new \yii\base\NotSupportedException;
    }

    public function getId()
    {
        return $this->persona;
    }

    public function validateAuthKey($authKey)
    {
        throw new \yii\base\NotSupportedException;
    }

    public static function findIdentity($id)
    {
        return self::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new \yii\base\NotSupportedException;
    }
    
    public static function findByUsername($username)
    {
        return self::findOne([ 'login' => $username ]);
    }
    
    public function validatePassword($password)
    {
        return strcmp($this->password, md5($password)) == 0;
    }

}
