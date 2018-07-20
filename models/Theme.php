<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * LoginForm is the model behind the login form.
 *
 *
 * @property string $name
 * @property bool $enabled
 */
class Theme extends ActiveRecord
{
    protected $name;


    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return ProjectInfo the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['name', 'enabled'], 'required'],
            ['create_dt', 'default', 'value' => function() {
                $a = new \DateTime();
                return $a->format('Y-m-d H:i:s');
            }],
        ];
    }
}
