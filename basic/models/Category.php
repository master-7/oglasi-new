<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ogl_category".
 *
 * @property integer $id
 * @property integer $filter_id
 * @property string $name
 * @property integer $active
 * @property string $title
 * @property string $description
 * @property string $cdate
 *
 * @property CategoryFilter $filter
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ogl_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['filter_id', 'name', 'title', 'description'], 'required'],
            [['filter_id', 'active'], 'integer'],
            [['description'], 'string'],
            [['cdate'], 'safe'],
            [['name'], 'string', 'max' => 45],
            [['title'], 'string', 'max' => 255],
            [['name'], 'unique'],
            [['title'], 'unique'],
            [['filter_id'], 'exist', 'skipOnError' => true, 'targetClass' => CategoryFilter::className(), 'targetAttribute' => ['filter_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'filter_id' => 'Filter ID',
            'name' => 'Name',
            'active' => 'Active',
            'title' => 'Title',
            'description' => 'Description',
            'cdate' => 'Cdate',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFilter()
    {
        return $this->hasOne(CategoryFilter::className(), ['id' => 'filter_id']);
    }

    /**
     * @inheritdoc
     * @return \app\models\query\CategoryQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\CategoryQuery(get_called_class());
    }
}
