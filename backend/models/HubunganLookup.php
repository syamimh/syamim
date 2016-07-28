<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "hubungan_lookup".
 *
 * @property integer $id
 * @property string $jenis_hubungan
 */
class HubunganLookup extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hubungan_lookup';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jenis_hubungan'], 'required'],
            [['jenis_hubungan'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'jenis_hubungan' => 'Jenis Hubungan',
        ];
    }
}
