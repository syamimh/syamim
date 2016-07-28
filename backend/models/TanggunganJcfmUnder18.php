<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tanggungan_jcfm_under_18".
 *
 * @property integer $id
 * @property string $nama
 * @property string $no_ic
 * @property string $bangsa
 * @property string $warganegara
 * @property string $jantina
 * @property string $no_kad_oku
 * @property string $hubungan
 * @property integer $id_jcfm_under_18
 */
class TanggunganJcfmUnder18 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tanggungan_jcfm_under_18';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // [['nama', 'no_ic', 'bangsa', 'warganegara', 'jantina', 'no_kad_oku', 'hubungan', 'id_jcfm_under_18'], 'required'],
            [['bangsa', 'warganegara', 'jantina'], 'string'],
            [['id_jcfm_under_18'], 'integer'],
            [['nama'], 'string', 'max' => 200],
            [['no_ic'], 'string', 'max' => 20],
            [['no_kad_oku'], 'string', 'max' => 15],
            [['hubungan'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'no_ic' => 'No Ic',
            'bangsa' => 'Bangsa',
            'warganegara' => 'Warganegara',
            'jantina' => 'Jantina',
            'no_kad_oku' => 'No Kad Oku',
            'hubungan' => 'Hubungan',
            'id_jcfm_under_18' => 'Id Jcfm Under 18',
        ];
    }
}
