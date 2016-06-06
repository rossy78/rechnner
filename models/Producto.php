<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "producto".
 *
 * @property integer $id_producto
 * @property string $nombre
 * @property string $descripcion
 *
 * @property LlamadaProducto[] $llamadaProductos
 * @property Llamada[] $lidLlamadas
 */
class Producto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'producto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'descripcion'], 'required', 'message' => 'El campo es obligatorio'],
            [['nombre'], 'string', 'max' => 30],
            [['descripcion'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_producto' => 'Id Producto',
            'nombre' => 'Nombre',
            'descripcion' => 'Descripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLlamadaProductos()
    {
        return $this->hasMany(LlamadaProducto::className(), ['id_producto' => 'id_producto']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLidLlamadas()
    {
        return $this->hasMany(Llamada::className(), ['id_llamada' => 'lid_llamada'])->viaTable('llamada_producto', ['id_producto' => 'id_producto']);
    }
}
