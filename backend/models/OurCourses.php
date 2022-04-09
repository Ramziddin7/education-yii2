<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "our_courses".
 *
 * @property int $id
 * @property string $date
 * @property string $name_uz
 * @property string $name_ru
 * @property string $name_en
 * @property string $content_uz
 * @property string $content_ru
 * @property string $content_en
 * @property string $image
 * @property string $link
 */
class OurCourses extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'our_courses';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date', 'name_uz', 'name_ru', 'name_en', 'content_uz', 'content_ru', 'content_en', 'image', 'type'], 'required'],
            [['date', 'name_uz', 'name_ru', 'name_en'], 'string', 'max' => 30],
            [['content_uz', 'content_ru', 'content_en', 'image'], 'string', 'max' => 100],
            [['type','enrolled'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Published',
            'name_uz' => 'Name Uz',
            'name_ru' => 'Name Ru',
            'name_en' => 'Name En',
            'content_uz' => 'Content Uz',
            'content_ru' => 'Content Ru',
            'content_en' => 'Content En',
            'image' => 'Image',
            'type' => 'Type',
        ];
    }
}
