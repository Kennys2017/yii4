<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "busket".
 *
 * @property int $id
 * @property int $user_id
 * @property string $sum
 * @property string $amount
 * @property string $add_at
 * @property string $delete_at
 *
 * @property User $user
 */
class Busket extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'busket';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'sum', 'amount', 'add_at', 'delete_at'], 'required'],
            [['id', 'user_id'], 'integer'],
            [['add_at', 'delete_at'], 'safe'],
            [['sum', 'amount'], 'string', 'max' => 100],
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
            'user_id' => 'User ID',
            'sum' => 'Сумма',
            'amount' => 'Итого',
            'add_at' => 'Дата добавления',
            'delete_at' => 'Дата удаления',
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
