<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "jcfm_under_18".
 *
 * @property integer $id
 * @property string $nama
 * @property string $no_ic
 * @property string $bangsa
 * @property string $warganegara
 * @property string $Jantina
 * @property string $tarikh_lahir
 * @property string $tempat_lahir
 * @property string $alamat
 * @property integer $poskod
 * @property integer $daerah
 * @property integer $negeri
 * @property string $no_fon_rumah
 * @property string $no_fon_bimbit
 * @property string $pekerjaan
 * @property string $jawatan
 * @property string $sebab
 * @property string $hasrat
 */
class JcfmUnder18 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jcfm_under_18';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'no_ic', 'bangsa', 'warganegara', 'Jantina', 'tarikh_lahir', 'tempat_lahir', 'alamat', 'poskod', 'daerah', 'negeri', /*'no_fon_rumah', 'no_fon_bimbit',*/ 'pekerjaan', /*'jawatan',*/ 'sebab', 'hasrat'], 'required'],
            [['bangsa', 'warganegara', 'Jantina', 'alamat'], 'string'],
            [['poskod',], 'integer'],
            [['nama'], 'string', 'max' => 255],
            [['no_ic', 'tarikh_lahir', 'tempat_lahir', 'pekerjaan', 'jawatan','daerah', 'negeri'], 'string', 'max' => 50],
            [['no_fon_rumah', 'no_fon_bimbit'], 'string', 'max' => 25],
            [['sebab', 'hasrat'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama Penuh',
            'no_ic' => 'No. Kad Pengenalan',
            'bangsa' => 'Bangsa',
            'warganegara' => 'Warganegara',
            'Jantina' => 'Jantina',
            'tarikh_lahir' => 'Tarikh Lahir',
            'tempat_lahir' => 'Tempat Lahir',
            'alamat' => 'Alamat',
            'poskod' => 'Poskod',
            'daerah' => 'Daerah',
            'negeri' => 'Negeri',
            'no_fon_rumah' => 'Telefon Rumah',
            'no_fon_bimbit' => 'Telefon Bimbit',
            'pekerjaan' => 'Pekerjaan',
            'jawatan' => 'Jawatan',
            'sebab' => 'Sebab',
            'hasrat' => 'Hasrat',
        ];
    }
}
