<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VegetableRecordVendorAmountsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VegetableRecordVendorAmountsTable Test Case
 */
class VegetableRecordVendorAmountsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\VegetableRecordVendorAmountsTable
     */
    public $VegetableRecordVendorAmounts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.vegetable_record_vendor_amounts'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('VegetableRecordVendorAmounts') ? [] : ['className' => VegetableRecordVendorAmountsTable::class];
        $this->VegetableRecordVendorAmounts = TableRegistry::getTableLocator()->get('VegetableRecordVendorAmounts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->VegetableRecordVendorAmounts);

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
