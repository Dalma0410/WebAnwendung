<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TblAnmelden Model
 *
 * @method \App\Model\Entity\TblAnmelden newEmptyEntity()
 * @method \App\Model\Entity\TblAnmelden newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\TblAnmelden[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TblAnmelden get($primaryKey, $options = [])
 * @method \App\Model\Entity\TblAnmelden findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\TblAnmelden patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TblAnmelden[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\TblAnmelden|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TblAnmelden saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TblAnmelden[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\TblAnmelden[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\TblAnmelden[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\TblAnmelden[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class TblAnmeldenTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('tbl_anmelden');
        $this->setDisplayField('ID');
        $this->setPrimaryKey('ID');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('ID')
            ->allowEmptyString('ID', null, 'create');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->scalar('Passwort')
            ->maxLength('Passwort', 20)
            ->requirePresence('Passwort', 'create')
            ->notEmptyString('Passwort');

        return $validator;
    }
}
