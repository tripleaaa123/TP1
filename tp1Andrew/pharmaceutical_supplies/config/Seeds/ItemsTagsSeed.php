<?php
use Migrations\AbstractSeed;

/**
 * ItemsTags seed.
 */
class ItemsTagsSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
        ];

        $table = $this->table('items_tags');
        $table->insert($data)->save();
    }
}
