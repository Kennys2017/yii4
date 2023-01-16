<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "meneger".
 *
 * @property int $id
 * @property int $isAuthor
 * @property int $user_id
 *
 * @property Company[] $companies
 * @property User $user
 */
class Meneger extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'meneger';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['isAuthor', 'user_id'], 'required'],
            [['isAuthor', 'user_id'], 'integer'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'isAuthor' => 'Is Author',
            'user_id' => 'User ID',
        ];
    }

    /**
     * Gets query for [[Companies]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCompanies()
    {
        return $this->hasMany(Company::class, ['id_meneger' => 'id']);
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
