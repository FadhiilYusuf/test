<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wilayah".
 *
 * @property int $id_wilayah
 * @property string $kd_wilayah
 * @property string $nama_wilayah
 * @property string $luas_wilayah
 * @property int $jumlah_populasi
 * @property string $tanggal_pendirian
 * @property string $deskripsi_wilayah
 */
class Wilayah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'wilayah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_wilayah', 'nama_wilayah', 'luas_wilayah', 'jumlah_populasi', 'tanggal_pendirian', 'deskripsi_wilayah'], 'required'],
            [['jumlah_populasi'], 'integer'],
            [['tanggal_pendirian'], 'safe'],
            [['kd_wilayah'], 'string', 'max' => 10],
            [['nama_wilayah', 'deskripsi_wilayah'], 'string', 'max' => 50],
            [['luas_wilayah'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_wilayah' => 'Id Wilayah',
            'kd_wilayah' => 'Kd Wilayah',
            'nama_wilayah' => 'Nama Wilayah',
            'luas_wilayah' => 'Luas Wilayah',
            'jumlah_populasi' => 'Jumlah Populasi',
            'tanggal_pendirian' => 'Tanggal Pendirian',
            'deskripsi_wilayah' => 'Deskripsi Wilayah',
        ];
    }
}
