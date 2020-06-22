<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fatura".
 *
 * @property int $idFatura
 * @property string|null $dataH
 * @property float|null $precoTotal
 */
class Fatura extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fatura';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dataH'], 'safe'],
            [['precoTotal'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idFatura' => 'Id Fatura',
            'dataH' => 'Data H',
            'precoTotal' => 'Preco Total',
        ];
    }
}
