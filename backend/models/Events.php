<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "events".
 *
 * @property int $id
 * @property string $title_uz
 * @property string $title_ru
 * @property string $title_en
 * @property string $moreinformation_uz
 * @property string $moreinformation_ru
 * @property string $moreinformation_en
 * @property string $date
 * @property string $where_uz
 * @property string $where_ru
 * @property string $where_en
 * @property string $video
 * @property string $facelogo_video
 */
class Events extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'events';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title_uz', 'title_ru', 'title_en', 'moreinformation_uz', 'moreinformation_ru', 'moreinformation_en', 'date', 'where_uz', 'where_ru', 'where_en', 'video'], 'required'],
            [['title_uz', 'title_ru', 'title_en', 'date'], 'string', 'max' => 30],
            [['moreinformation_uz', 'moreinformation_ru', 'moreinformation_en'], 'string', 'max' => 50],
            [['where_uz', 'where_ru', 'where_en', 'video', 'facelogo_video'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title_uz' => 'Title Uz',
            'title_ru' => 'Title Ru',
            'title_en' => 'Title En',
            'moreinformation_uz' => 'Moreinformation Uz',
            'moreinformation_ru' => 'Moreinformation Ru',
            'moreinformation_en' => 'Moreinformation En',
            'date' => 'Date',
            'where_uz' => 'Where Uz',
            'where_ru' => 'Where Ru',
            'where_en' => 'Where En',
            'video' => 'Video',
            'facelogo_video' => 'Facelogo Video',
        ];
    }
}
