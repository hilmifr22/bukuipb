<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bukuipb".
 *
 * @property int $no
 * @property string $Nama Buku
 * @property string $Nama Penulis
 * @property int $Tahun Terbit
 * @property string $Tampat Terbit
 * @property string $Nama Penerbit
 */
class Bukuipb extends \yii\db\ActiveRecord
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
            [['Nama Buku', 'Nama Penulis', 'Tahun Terbit', 'Tampat Terbit', 'Nama Penerbit'], 'required'],
            [['Tahun Terbit'], 'integer'],
            [['Nama Buku'], 'string', 'max' => 100],
            [['Nama Penulis', 'Tampat Terbit', 'Nama Penerbit'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'no' => 'No',
            'Nama Buku' => 'Nama  Buku',
            'Nama Penulis' => 'Nama  Penulis',
            'Tahun Terbit' => 'Tahun  Terbit',
            'Tampat Terbit' => 'Tampat  Terbit',
            'Nama Penerbit' => 'Nama  Penerbit',
        ];
    }
}
