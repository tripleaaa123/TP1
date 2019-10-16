<?php
use Migrations\AbstractSeed;

/**
 * Items seed.
 */
class ItemsSeed extends AbstractSeed
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
                'user_id' => '1',
                'name' => 'Ajouté protégé',
                'cost' => '40',
                'slug' => 'ajoute',
                'description' => 'Automatiquement protégé',
                'published' => '1',
                'created' => '2019-08-21 00:00:00',
                'modified' => '2019-08-25 23:48:47',
            ],
            [
                'id' => '4',
                'user_id' => '2',
                'name' => 'Ajouté par admin@admin.com',
                'cost' => '20',
                'slug' => 'Ajoute-par-admin-admin-com',
                'description' => 'Est-ce qu\'on peut le modifier?
En tant que visiteur?
En tant que cakephp@example.com?',
                'published' => '0',
                'created' => '2019-08-26 00:09:41',
                'modified' => '2019-08-26 00:09:41',
            ],
        ];

        $table = $this->table('items');
        $table->insert($data)->save();
    }
}
