<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "teachers".
 *
 * @property int $id
 * @property string $name_uz
 * @property string $name_ru
 * @property string $name_en
 * @property string $field_uz
 * @property string $field_ru
 * @property string $field_en
 * @property string $image
 * @property string $telegram
 * @property string $facebook
 * @property string $instagram
 * @property string $phone
 * @property int $type
 */
class Teachers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'teachers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_uz', 'name_ru', 'name_en', 'field_uz', 'field_ru', 'field_en', 'image', 'telegram', 'facebook', 'instagram', 'phone', 'type'], 'required'],
            [['type'], 'integer'],
            [['name_uz', 'name_ru', 'name_en', 'field_uz', 'field_ru', 'field_en', 'telegram', 'facebook', 'instagram', 'phone'], 'string', 'max' => 30],
            [['image'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_uz' => 'Name Uz',
            'name_ru' => 'Name Ru',
            'name_en' => 'Name En',
            'field_uz' => 'Field Uz',
            'field_ru' => 'Field Ru',
            'field_en' => 'Field En',
            'image' => 'Image',
            'telegram' => 'Telegram',
            'facebook' => 'Facebook',
            'instagram' => 'Instagram',
            'phone' => 'Phone',
            'type' => 'Type',
        ];
    }
}
