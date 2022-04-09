<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "add_newimage_slide".
 *
 * @property int $id
 * @property string $image
 * @property string $content_uz
 * @property string $content_ru
 * @property string $content_en
 */
class AddNewimageSlide extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'add_newimage_slide';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['image', 'content_uz', 'content_ru', 'content_en'], 'required'],
            [['image'], 'string', 'max' => 100],
            [['content_uz'], 'string', 'max' => 50],
            [['content_ru', 'content_en'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image' => 'Image',
            'content_uz' => 'Content Uz',
            'content_ru' => 'Content Ru',
            'content_en' => 'Content En',
        ];
    }
    public function getImageUrl(){
        return $this->image;
    }
}
