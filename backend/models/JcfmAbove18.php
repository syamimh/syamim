<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "jcfm_above_18".
 *
 * @property integer $id
 * @property string $nama
 * @property string $no_ic
 * @property string $bangsa
 * @property string $warganegara
 * @property string $jantina
 * @property string $tarikh_lahir
 * @property string $tempat_lahir
 * @property string $no_kad_oku
 * @property string $alamat
 * @property integer $poskod
 * @property integer $daerah
 * @property integer $negeri
 * @property string $lesen_kenderaan
 * @property string $no_fon_rumah
 * @property string $no_fon_bimbit
 * @property string $nama_pusat_latihan
 * @property string $sebab
 * @property string $hasrat
 */
class JcfmAbove18 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jcfm_above_18';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // [['nama', 'no_ic', 'bangsa', 'warganegara', 'jantina', 'tarikh_lahir', 'tempat_lahir', 'no_kad_oku', 'alamat', 'poskod', 'daerah', 'negeri', 'lesen_kenderaan', /*'no_fon_rumah', 'no_fon_bimbit',*/ 'nama_pusat_latihan', 'sebab', 'hasrat'], 'required'],
            [['bangsa', 'warganegara', 'jantina', 'alamat'], 'string'],
            [['poskod', 'daerah', 'negeri'], 'integer'],
            [['nama'], 'string', 'max' => 255],
            [['no_ic', 'tempat_lahir'], 'string', 'max' => 20],
            [['tarikh_lahir', 'no_fon_rumah', 'no_fon_bimbit'], 'string', 'max' => 15],
            [['no_kad_oku', 'nama_pusat_latihan'], 'string', 'max' => 50],
            [['lesen_kenderaan'], 'string', 'max' => 10],
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
            'nama' => 'Nama',
            'no_ic' => 'No Kad Pengenalan',
            'bangsa' => 'Bangsa',
            'warganegara' => 'Warganegara',
            'jantina' => 'Jantina',
            'tarikh_lahir' => 'Tarikh Lahir',
            'tempat_lahir' => 'Tempat Lahir',
            'no_kad_oku' => 'No Kad Oku',
            'alamat' => 'Alamat Tetap',
            'poskod' => 'Poskod',
            'daerah' => 'Daerah',
            'negeri' => 'Negeri',
            'lesen_kenderaan' => 'Lesen Kenderaan',
            'no_fon_rumah' => 'No. Telefon Rumah',
            'no_fon_bimbit' => 'No. Telefon Bimbit',
            'nama_pusat_latihan' => 'Nama Pusat Latihan',
            'sebab' => 'Sebab',
            'hasrat' => 'Hasrat',
        ];
    }
}
