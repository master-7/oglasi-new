<?php
namespace app\components;

use app\models\Category;
use yii\base\Widget;

class FilterWidget extends Widget
{
    public $idCategory;

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        if ($this->idCategory) {
            $categoryData = Category::find()->getFilterDataForCategory($this->idCategory);
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