<?php
namespace app\controllers\helpers;

use app\models\Category;

/**
 * Class FilterHelper created filters
 * @package app\controllers\helpers
 */
class FilterHelper {
    /**
     * Render view data
     * @param $view
     * @param array $params
     * @param null $context
     * @return string
     */
    private function render($view, $params = [], $context = null) {
        return \Yii::$app->view->render($view, $params, $context);
    }

    /**
     * Return filters by $idCategory category
     * @param null $idCategory
     * @return string
     */
    public function getFilters ($idCategory = null) {
        if ($idCategory) {
            $categoryData = Category::find()->getFilterDataForCategory($idCategory);
            return $this->render('index', [
                'filter' => json_decode($categoryData->filter["filter"])
            ]);
        }
        else {
            return $this->render('index', [
                'category' => Category::find()->asArray()->all()
            ]);
        }
    }
}