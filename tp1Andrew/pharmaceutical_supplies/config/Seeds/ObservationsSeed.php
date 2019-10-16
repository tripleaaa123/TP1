<?php
use Migrations\AbstractSeed;

/**
 * Observations seed.
 */
class ObservationsSeed extends AbstractSeed
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
                'id' => '1',
                'item_id' => '4',
                'title' => 'Moi',
                'observation' => 'Mon commentaire sur Ajouté par admin',
                'created' => '2019-08-29 23:13:03',
                'modified' => '2019-08-29 23:13:03',
            ],
            [
                'id' => '2',
                'item_id' => '2',
                'title' => 'Toi',
                'observation' => 'Ton commentaire sur Ajouté protégé',
                'created' => '2019-08-29 23:18:39',
                'modified' => '2019-08-29 23:18:39',
            ],
        ];

        $table = $this->table('observations');
        $table->insert($data)->save();
    }
}
