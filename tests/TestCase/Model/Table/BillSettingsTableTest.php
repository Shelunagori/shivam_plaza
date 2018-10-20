<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BillSettingsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BillSettingsTable Test Case
 */
class BillSettingsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BillSettingsTable
     */
    public $BillSettings;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.bill_settings'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('BillSettings') ? [] : ['className' => BillSettingsTable::class];
        $this->BillSettings = TableRegistry::getTableLocator()->get('BillSettings', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BillSettings);

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
}
