<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pegawai".
 *
 * @property int $id_pegawai
 * @property string $nama_pegawai
 * @property string $alamat
 * @property string $tanggal_lahir
 * @property string $jenis_kelamin
 * @property string $jabatan
 * @property int $gaji
 */
class Pegawai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pegawai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_pegawai', 'alamat', 'tanggal_lahir', 'jenis_kelamin', 'jabatan', 'gaji'], 'required'],
            [['tanggal_lahir'], 'safe'],
            [['jenis_kelamin'], 'string'],
            [['gaji'], 'integer'],
            [['nama_pegawai', 'jabatan'], 'string', 'max' => 50],
            [['alamat'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pegawai' => 'Id Pegawai',
            'nama_pegawai' => 'Nama Pegawai',
            'alamat' => 'Alamat',
            'tanggal_lahir' => 'Tanggal Lahir',
            'jenis_kelamin' => 'Jenis Kelamin',
            'jabatan' => 'Jabatan',
            'gaji' => 'Gaji',
        ];
    }
}
