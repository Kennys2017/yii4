<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "adress".
 *
 * @property int $id
 * @property int $user_id
 * @property string $city
 * @property string $street
 * @property string $house
 * @property int $flat_number
 * @property string $comment
 *
 * @property User $user
 */
class Adress extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'adress';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'city', 'street', 'house', 'flat_number', 'comment'], 'required'],
            [['user_id', 'flat_number'], 'integer'],
            [['city', 'street', 'house', 'comment'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'city' => 'Город',
            'street' => 'Улица',
            'house' => 'Дом',
            'flat_number' => 'Номер квартиры',
            'comment' => 'Комментарий',
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'user_id']);
    }
}
