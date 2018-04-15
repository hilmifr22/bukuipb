<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bukuipb".
 *
 * @property int $no
 * @property string $Nama_Buku
 * @property string $Nama_Penulis
 * @property int $Tahun_Terbit
 * @property string $Tampat_Terbit
 * @property string $Nama_Penerbit
 */
class Tabel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bukuipb';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Nama_Buku', 'Nama_Penulis', 'Tahun_Terbit', 'Tampat_Terbit', 'Nama_Penerbit'], 'required'],
            [['Tahun_Terbit'], 'integer'],
            [['Nama_Buku'], 'string', 'max' => 100],
            [['Nama_Penulis', 'Tampat_Terbit', 'Nama_Penerbit'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'no' => 'No',
            'Nama_Buku' => 'Nama  Buku',
            'Nama_Penulis' => 'Nama  Penulis',
            'Tahun_Terbit' => 'Tahun  Terbit',
            'Tampat_Terbit' => 'Tampat  Terbit',
            'Nama_Penerbit' => 'Nama  Penerbit',
        ];
    }
}
