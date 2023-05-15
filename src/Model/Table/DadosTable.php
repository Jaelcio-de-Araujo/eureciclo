<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Dados Model
 *
 * @method \App\Model\Entity\Dado newEmptyEntity()
 * @method \App\Model\Entity\Dado newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Dado[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Dado get($primaryKey, $options = [])
 * @method \App\Model\Entity\Dado findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Dado patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Dado[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Dado|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Dado saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Dado[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Dado[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Dado[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Dado[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class DadosTable extends Table
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

        $this->setTable('dados');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->scalar('compradores')
            ->maxLength('compradores', 25)
            ->requirePresence('compradores', 'create')
            ->notEmptyString('compradores');

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 4294967295)
            ->requirePresence('descricao', 'create')
            ->notEmptyString('descricao');

        $validator
            ->scalar('preco_unitario')
            ->maxLength('preco_unitario', 15)
            ->requirePresence('preco_unitario', 'create')
            ->notEmptyString('preco_unitario');

        $validator
            ->integer('quantidade')
            ->requirePresence('quantidade', 'create')
            ->notEmptyString('quantidade');

        $validator
            ->scalar('endereco')
            ->maxLength('endereco', 50)
            ->requirePresence('endereco', 'create')
            ->notEmptyString('endereco');

        $validator
            ->scalar('fornecedor')
            ->maxLength('fornecedor', 50)
            ->requirePresence('fornecedor', 'create')
            ->notEmptyString('fornecedor');

        return $validator;
    }
}
