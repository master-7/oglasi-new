<?php

namespace app\models;

use yii\base\Model;

/**
 * FilterForm is a main search adverts form
 *
 * @property User|null $user This property is read-only.
 *
 */
class FilterForm extends Model
{
    public $username;
    public $password;
    public $rememberMe = true;

    private $_user = false;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['username', 'password'], 'required'],
            // rememberMe must be a boolean value
            ['rememberMe', 'boolean'],
            // password is validated by validatePassword()
            ['password', 'validatePassword'],
        ];
    }

    public function setFilters($postData)
    {
        $this->processFilterRawData($postData);
    }

    private function processFilterRawData($postData)
    {
        return;
    }
}
