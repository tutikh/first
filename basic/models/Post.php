<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property int $id
 * @property string $title
 * @property string $anons
 * @property string $content
 * @property int $category_id
 * @property int $user_id
 * @property string $publish_date
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'anons', 'content', 'category_id', 'user_id'], 'required'],
            [['anons', 'content'], 'string'],
            [['category_id', 'user_id'], 'integer'],
            [['publish_date'], 'safe'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'anons' => 'Краткое описание',
            'content' => 'Содержание',
            'category_id' => 'Категория',
            'user_id' => 'Автор',
            'publish_date' => 'Опубликовано',
        ];
    }

    public function getUser() {
        return $this -> hasOne(User::className(), ['id' => 'user_id']);
    }

    public function getCategory() {
        return $this -> hasOne(Category::className(), ['id' => 'category_id']);
    }

    public function fields()
    {
        $fields = parent::fields();
        return $fields;
    }

    public function extraFields()
    {
        return [
            'user'
        ];
    }
}
