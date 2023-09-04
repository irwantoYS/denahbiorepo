<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "datapengunjung".
 *
 * @property int $id
 * @property string $nama
 * @property int $id_pegawai
 * @property string $tanggal
 * @property string $jam
 * @property string $keperluan
 * @property string $freezer
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
            [['nama', 'id_pegawai', 'tanggal', 'jam', 'keperluan', 'freezer'], 'required'],
            [['id_pegawai'], 'integer'],
            [['tanggal', 'jam'], 'safe'],
            [['nama'], 'string', 'max' => 100],
            [['keperluan'], 'string', 'max' => 150],
            [['freezer'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'id_pegawai' => 'Id Pegawai',
            'tanggal' => 'Tanggal',
            'jam' => 'Jam',
            'keperluan' => 'Keperluan',
            'freezer' => 'freezer',
        ];
    }
}
