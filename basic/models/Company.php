<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "company".
 *
 * @property int $id
 * @property int $name
 * @property int $INN
 * @property int $photo
 * @property int $created_at
 * @property int $updated_at
 * @property int $id_meneger
 * @property string $link
 *
 * @property Meneger $meneger
 */
class Company extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'company';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'INN', 'photo', 'created_at', 'updated_at', 'id_meneger', 'link'], 'required'],
            [['name', 'INN', 'photo', 'created_at', 'updated_at', 'id_meneger'], 'integer'],
            [['link'], 'string', 'max' => 100],
            [['id_meneger'], 'exist', 'skipOnError' => true, 'targetClass' => Meneger::class, 'targetAttribute' => ['id_meneger' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'INN' => 'ИНН',
            'photo' => 'Фото',
            'created_at' => 'Дата создания',
            'updated_at' => 'Дата обновления',
            'id_meneger' => 'Id Meneger',
            'link' => 'Ссылка',
        ];
    }

    /**
     * Gets query for [[Meneger]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMeneger()
    {
        return $this->hasOne(Meneger::class, ['id' => 'id_meneger']);
    }
}
