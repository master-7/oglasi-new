<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ogl_category_filter".
 *
 * @property integer $id
 * @property string $filter
 * @property string $edate
 *
 * @property Category[] $oglCategories
 */
class CategoryFilter extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ogl_category_filter';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['filter'], 'required'],
            [['filter'], 'string'],
            [['edate'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'filter' => 'Filter',
            'edate' => 'Edate',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategories()
    {
        return $this->hasMany(Category::className(), ['filter_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return \app\models\query\CategoryFilterQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\CategoryFilterQuery(get_called_class());
    }
}
