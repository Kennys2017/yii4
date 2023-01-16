<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property int $id_category
 * @property string $name
 * @property string $image
 * @property string $discount
 * @property string $description
 * @property string $characteristic
 * @property string $mode_of_application
 * @property string $link
 * @property string $rating
 * @property string $created_at
 * @property string $updated_at
 * @property string $price
 * @property int $isDiscount
 *
 * @property ProductHasFavorite $id0
 * @property ProductHasCategories $productHasCategories
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_category', 'name', 'image', 'discount', 'description', 'characteristic', 'mode_of_application', 'link', 'rating', 'created_at', 'updated_at', 'price', 'isDiscount'], 'required'],
            [['id_category', 'isDiscount'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['name', 'image', 'discount', 'description', 'characteristic', 'mode_of_application', 'rating', 'price'], 'string', 'max' => 100],
            [['link'], 'string', 'max' => 300],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => ProductHasFavorite::class, 'targetAttribute' => ['id' => 'product_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_category' => 'Id Category',
            'name' => 'Название',
            'image' => 'Изображение',
            'discount' => 'Скидка',
            'description' => 'Описание',
            'characteristic' => 'Характеристики',
            'mode_of_application' => 'Способ применения',
            'link' => 'Ссылка',
            'rating' => 'Рейтинг',
            'created_at' => 'Дата созданияt',
            'updated_at' => 'Дата обновления',
            'price' => 'Цена',
            'isDiscount' => 'Is Discount',
        ];
    }

    /**
     * Gets query for [[Id0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(ProductHasFavorite::class, ['product_id' => 'id']);
    }

    /**
     * Gets query for [[ProductHasCategories]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductHasCategories()
    {
        return $this->hasOne(ProductHasCategories::class, ['id' => 'id_category']);
    }
}
