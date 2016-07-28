<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "daerah_lookup".
 *
 * @property integer $id
 * @property string $senarai_daerah
 * @property integer $id_negeri
 */
class DaerahLookup extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'daerah_lookup';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['senarai_daerah', 'id_negeri'], 'required'],
            [['id_negeri'], 'integer'],
            [['senarai_daerah'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'senarai_daerah' => 'Senarai Daerah',
            'id_negeri' => 'Id Negeri',
        ];
    }
}
