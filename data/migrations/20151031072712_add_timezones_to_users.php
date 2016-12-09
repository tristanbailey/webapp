<?php

use Phinx\Migration\AbstractMigration;

class AddTimezonesToUsers extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     *
     * Uncomment this method if you would like to use it.
     *
    public function change()
    {
    }
    */

    /**
     * Migrate Up.
     */
    public function up()
    {
        $users = $this->table('users');

        $users->addColumn('timezone', 'string', ['null' => true])->update();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $users = $this->table('users');

        $users->removeColumn('timezone')->update();
    }
}
