<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ObservationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ObservationsTable Test Case
 */
class ObservationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ObservationsTable
     */
    public $Observations;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Observations',
        'app.Items'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Observations') ? [] : ['className' => ObservationsTable::class];
        $this->Observations = TableRegistry::getTableLocator()->get('Observations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Observations);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
