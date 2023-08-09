<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "datapengunjung".
 *
 * @property int $id_pengunjung
 * @property string $nama_lengkap
 * @property string $tanggal
 * @property string $waktu
 * @property string $keperluan
 */
class Datapengunjung extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'datapengunjung';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pengunjung', 'nama_lengkap', 'tanggal', 'waktu', 'keperluan'], 'required'],
            [['id_pengunjung'], 'integer'],
            [['tanggal', 'waktu'], 'safe'],
            [['nama_lengkap', 'keperluan'], 'string', 'max' => 250],
            [['id_pengunjung'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pengunjung' => 'Id Pengunjung',
            'nama_lengkap' => 'Nama Lengkap',
            'tanggal' => 'Tanggal',
            'waktu' => 'Waktu',
            'keperluan' => 'Keperluan',
        ];
    }
}
