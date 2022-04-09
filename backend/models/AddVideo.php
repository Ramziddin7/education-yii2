<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "add_video".
 *
 * @property int $id
 * @property string $Url_from_youtobe
 * @property string $facelogo_image
 * @property string $title_uz
 * @property string $title_ru
 * @property string $title_en
 * @property string $content_uz
 * @property string $content_ru
 * @property string $content_en
 * @property int $type_menu
 */
class AddVideo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'add_video';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Url_from_youtobe', 'title_uz', 'title_ru', 'title_en', 'content_uz', 'content_ru', 'content_en', 'type_menu'], 'required'],
            [['type_menu'], 'integer'],
            [['Url_from_youtobe', 'title_uz', 'title_ru', 'title_en', 'content_uz', 'content_ru', 'content_en'], 'string', 'max' => 250],
            [['facelogo_image'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Url_from_youtobe' => 'Url From Youtobe',
            'facelogo_image' => 'Facelogo Image',
            'title_uz' => 'Title Uz',
            'title_ru' => 'Title Ru',
            'title_en' => 'Title En',
            'content_uz' => 'Content Uz',
            'content_ru' => 'Content Ru',
            'content_en' => 'Content En',
            'type_menu' => 'Type Menu',
        ];
    }
}
