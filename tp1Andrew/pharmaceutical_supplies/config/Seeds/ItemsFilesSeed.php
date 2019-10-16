<?php
use Migrations\AbstractSeed;

/**
 * ItemsFiles seed.
 */
class ItemsFilesSeed extends AbstractSeed
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
            [
                'id' => '8',
                'item_id' => '2',
                'file_id' => '6',
            ],
        ];

        $table = $this->table('items_files');
        $table->insert($data)->save();
    }
}
