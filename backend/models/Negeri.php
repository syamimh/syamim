<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "negeri".
 *
 * @property integer $id
 * @property string $senarai_negeri
 */
class Negeri extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'negeri';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['senarai_negeri'], 'required'],
            [['senarai_negeri'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'senarai_negeri' => 'Senarai Negeri',
        ];
    }
}
