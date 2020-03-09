<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $nama
 * @property string $npm
 * @property string $prodi
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'npm', 'prodi'], 'required'],
            [['nama'], 'string', 'max' => 200],
            [['npm'], 'string', 'max' => 10],
            [['prodi'], 'string', 'max' => 25],
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
            'npm' => 'Npm',
            'prodi' => 'Prodi',
            
        ];
    }
}
