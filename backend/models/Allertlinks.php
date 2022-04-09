<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "allertlinks".
 *
 * @property int $id
 * @property string $location_uz
 * @property string $location_ru
 * @property string $location_en
 * @property string $telegram
 * @property string $phone
 * @property string $email
 * @property string $facebook
 * @property string $instagram
 * @property string $youtobe
 */
class Allertlinks extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'allertlinks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['location_uz', 'location_ru', 'location_en', 'telegram', 'phone', 'email', 'facebook', 'instagram', 'youtobe'], 'required'],
            [['location_uz', 'location_ru', 'location_en'], 'string', 'max' => 80],
            [['telegram', 'phone', 'facebook', 'instagram', 'youtobe'], 'string', 'max' => 30],
            [['email'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'location_uz' => 'Location Uz',
            'location_ru' => 'Location Ru',
            'location_en' => 'Location En',
            'telegram' => 'Telegram(link (with https))',
            'phone' => 'Phone',
            'email' => 'Email',
            'facebook' => 'Facebook(link (with https))',
            'instagram' => 'Instagram(link (with https))',
            'youtobe' => 'Youtobe(link (with https))',
        ];
    }
}
