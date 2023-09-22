<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tindakan".
 *
 * @property int $id_tindakan
 * @property string $nama_tindakan
 * @property string|null $deskripsi_tindakan
 * @property int $biaya
 * @property string $tanggal_tindakan
 */
class Tindakan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tindakan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_tindakan', 'biaya', 'tanggal_tindakan'], 'required'],
            [['deskripsi_tindakan'], 'string'],
            [['biaya'], 'integer'],
            [['tanggal_tindakan'], 'safe'],
            [['nama_tindakan'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_tindakan' => 'Id Tindakan',
            'nama_tindakan' => 'Nama Tindakan',
            'deskripsi_tindakan' => 'Deskripsi Tindakan',
            'biaya' => 'Biaya',
            'tanggal_tindakan' => 'Tanggal Tindakan',
        ];
    }
}
