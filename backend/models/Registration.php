<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "registration".
 *
 * @property int $id
 * @property string $subject
 * @property string $begining_date
 * @property string $duration
 * @property string $phone
 * @property string $address
 */
class Registration extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'registration';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['subject', 'begining_date', 'duration', 'phone', 'address','name','age'], 'required'],
            [['subject'], 'string', 'max' => 80],
            [['name'],'string','max'=> 20],
            [['age'],'string','max' => 2],

            [['begining_date', 'duration', 'phone'], 'string', 'max' => 30],
            [['address'], 'string', 'max' => 100],
            [['enrolled'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'name',
            'age' => 'age',
            'subject' => 'Subject',
            'begining_date' => 'Begining Date',
            'duration' => 'Duration',
            'phone' => 'Phone',
            'address' => 'Address',

        ];
    }
}
