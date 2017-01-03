<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ogl_advert".
 *
 * @property integer $id
 * @property integer $cat_id
 * @property string $filter
 * @property string $title
 * @property string $text
 * @property integer $price
 * @property integer $city_id
 * @property string $map_coordinates
 * @property integer $type
 * @property string $expdate
 * @property integer $active
 * @property integer $creator_id
 * @property integer $video_id
 * @property string $cdate
 * @property string $edate
 */
class Advert extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ogl_advert';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'text', 'price', ], 'required'],
            [['cat_id', 'price', 'city_id', 'type', 'active', 'creator_id', 'video_id'], 'integer'],
            [['filter', 'text', /*'map_coordinates'*/], 'string'],
            [['expdate', 'cdate', 'edate','expdate', 'city_id',/* 'map_coordinates',*/ 'creator_id', 'filter', 'cat_id'], 'safe'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cat_id' => 'Cat ID',
            'filter' => 'Filter',
            'title' => 'Title',
            'text' => 'Text',
            'price' => 'Price',
            'city_id' => 'City ID',
            //'map_coordinates' => 'Map Coordinates',
            'type' => 'Type',
            'expdate' => 'Expdate',
            'active' => 'Active',
            'creator_id' => 'Creator ID',
            'video_id' => 'Video ID',
            'cdate' => 'Cdate',
            'edate' => 'Edate',
        ];
    }

    /**
     * @inheritdoc
     * @return \app\models\query\AdvertQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\AdvertQuery(get_called_class());
    }
}
