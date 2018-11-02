<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmployeeSalariesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmployeeSalariesTable Test Case
 */
class EmployeeSalariesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EmployeeSalariesTable
     */
    public $EmployeeSalaries;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.employee_salaries',
        'app.employees'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('EmployeeSalaries') ? [] : ['className' => EmployeeSalariesTable::class];
        $this->EmployeeSalaries = TableRegistry::getTableLocator()->get('EmployeeSalaries', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EmployeeSalaries);

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
