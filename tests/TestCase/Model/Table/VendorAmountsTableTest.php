<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VendorAmountsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VendorAmountsTable Test Case
 */
class VendorAmountsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\VendorAmountsTable
     */
    public $VendorAmounts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.vendor_amounts'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('VendorAmounts') ? [] : ['className' => VendorAmountsTable::class];
        $this->VendorAmounts = TableRegistry::getTableLocator()->get('VendorAmounts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->VendorAmounts);

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
