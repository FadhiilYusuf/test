<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "obat".
 *
 * @property int $id_obat
 * @property string $nama_obat
 * @property string $kategori_obat
 * @property string|null $deskripsi_obat
 * @property int $harga
 * @property int $stok
 */
class Obat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'obat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_obat', 'kategori_obat', 'harga', 'stok'], 'required'],
            [['deskripsi_obat'], 'string'],
            [['harga', 'stok'], 'integer'],
            [['nama_obat'], 'string', 'max' => 50],
            [['kategori_obat'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_obat' => 'Id Obat',
            'nama_obat' => 'Nama Obat',
            'kategori_obat' => 'Kategori Obat',
            'deskripsi_obat' => 'Deskripsi Obat',
            'harga' => 'Harga',
            'stok' => 'Stok',
        ];
    }
}
