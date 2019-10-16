<?php
use Migrations\AbstractSeed;

/**
 * Files seed.
 */
class FilesSeed extends AbstractSeed
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
                'id' => '2',
                'name' => 'pill.jpg',
                'path' => 'Files/',
                'created' => '2019-08-30 00:34:55',
                'modified' => '2019-08-26 00:09:41',
                'status' => '1',
            ],
            [
                'id' => '6',
                'name' => 'mario.jpg',
                'path' => 'Files/',
                'created' => '2019-09-09 08:43:12',
                'modified' => '2019-09-09 08:43:12',
                'status' => '1',
            ],
        ];

        $table = $this->table('files');
        $table->insert($data)->save();
    }
}
