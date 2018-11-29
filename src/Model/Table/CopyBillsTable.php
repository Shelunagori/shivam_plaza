<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CopyBills Model
 *
 * @property \App\Model\Table\TablesTable|\Cake\ORM\Association\BelongsTo $Tables
 * @property \App\Model\Table\TaxesTable|\Cake\ORM\Association\BelongsTo $Taxes
 * @property \App\Model\Table\CustomersTable|\Cake\ORM\Association\BelongsTo $Customers
 * @property \App\Model\Table\EmployeesTable|\Cake\ORM\Association\BelongsTo $Employees
 * @property \App\Model\Table\OffersTable|\Cake\ORM\Association\BelongsTo $Offers
 *
 * @method \App\Model\Entity\CopyBill get($primaryKey, $options = [])
 * @method \App\Model\Entity\CopyBill newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CopyBill[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CopyBill|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CopyBill|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CopyBill patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CopyBill[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CopyBill findOrCreate($search, callable $callback = null, $options = [])
 */
class CopyBillsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('copy_bills');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        

        return $rules;
    }
}
