<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * @property string $name
 * @property bool $enabled
 * @property \DateTime $create_dt
 */
class Theme extends ActiveRecord
{
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
