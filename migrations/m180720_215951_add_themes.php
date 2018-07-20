<?php

use yii\db\Migration;

/**
 * Class m180720_215951_add_themes
 */
class m180720_215951_add_themes extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('Theme', [
            'id'        => $this->primaryKey(),
            'name'      => $this->string(),
            'enabled'   => $this->boolean(),
            'create_dt' => $this->dateTime(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('Theme');
    }
}
