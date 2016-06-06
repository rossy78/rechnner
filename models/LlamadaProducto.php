<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "llamada_producto".
 *
 * @property integer $lid_llamada
 * @property integer $id_producto
 *
 * @property Llamada $lidLlamada
 * @property Producto $idProducto
 */
class LlamadaProducto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'llamada_producto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lid_llamada', 'id_producto'], 'required', 'message' => 'El campo es obligatorio'],
            [['lid_llamada', 'id_producto'], 'integer'],
            [['lid_llamada', 'id_producto'], 'unique', 'targetAttribute' => ['lid_llamada', 'id_producto'], 'message' => 'The combination of Lid Llamada and Id Producto has already been taken.']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'lid_llamada' => 'Lid Llamada',
            'id_producto' => 'Id Producto',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLidLlamada()
    {
        return $this->hasOne(Llamada::className(), ['id_llamada' => 'lid_llamada']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdProducto()
    {
        return $this->hasOne(Producto::className(), ['id_producto' => 'id_producto']);
    }
}
