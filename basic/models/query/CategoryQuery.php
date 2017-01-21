<?php

namespace app\models\query;

/**
 * This is the ActiveQuery class for [[\app\models\Category]].
 *
 * @see \app\models\Category
 */
class CategoryQuery extends \yii\db\ActiveQuery
{
    public function withName($name)
    {
        return $this->andWhere(
            "name = :name",
            [
                "name" => $name
            ]
        );
    }

    public function getFilterDataForCategory($id)
    {
        return $this->withName($id)
            ->with("filter")
            ->asArray()
            ->one();
    }

    /**
     * @inheritdoc
     * @return \app\models\Category[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \app\models\Category|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
