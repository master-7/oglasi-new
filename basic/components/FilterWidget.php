<?php
namespace app\components;

use app\models\Category;
use yii\base\Widget;

class FilterWidget extends Widget
{
    public $categoryId;

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        if ($this->categoryId) {
            $categoryData = Category::find()->getFilterDataForCategory($this->categoryId);
            return $this->render('filters', [
                'filter' => json_decode($categoryData->filter["filter"])
            ]);
        }
        else {
            return $this->render('filters', [
                'category' => Category::find()->asArray()->all()
            ]);
        }
    }
}