<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "review".
 *
 * @property int $id
 * @property int $id_user
 * @property string $advantages
 * @property string $disadvantages
 * @property string $description
 * @property string $photo
 * @property string $video
 * @property int $nravitsa
 * @property int $dislike
 * @property string $created_at
 * @property string $updated_at
 *
 * @property User $user
 */
class Review extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'review';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user', 'advantages', 'disadvantages', 'description', 'photo', 'video', 'nravitsa', 'dislike', 'created_at', 'updated_at'], 'required'],
            [['id_user', 'nravitsa', 'dislike'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['advantages', 'disadvantages', 'description', 'photo', 'video'], 'string', 'max' => 100],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['id_user' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_user' => 'Id User',
            'advantages' => 'Преимущества',
            'disadvantages' => 'Недостатки',
            'description' => 'Описание',
            'photo' => 'Фото',
            'video' => 'Видео',
            'nravitsa' => 'Нравится',
            'dislike' => 'Не нравится',
            'created_at' => 'Дата создания',
            'updated_at' => 'Дата обновления',
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'id_user']);
    }
}
