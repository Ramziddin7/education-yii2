<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "derictors".
 *
 * @property int $id
 * @property string $name_uz
 * @property string $name_ru
 * @property string $name_en
 * @property string $about_uz
 * @property string $about_ru
 * @property string $about_en
 * @property string $image
 */
class Derictors extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'derictors';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_uz', 'name_ru', 'name_en', 'about_uz', 'about_ru', 'about_en', 'image'], 'required'],
            [['name_uz', 'name_ru', 'name_en'], 'string', 'max' => 30],
            [['about_uz', 'about_ru', 'about_en'], 'string', 'max' => 250],
            [['image'], 'string', 'max' => 100],
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
            'about_uz' => 'About Uz',
            'about_ru' => 'About Ru',
            'about_en' => 'About En',
            'image' => 'Image',
        ];
    }
}
