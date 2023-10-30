<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Frutas Model
 *
 * @property \App\Model\Table\VendasTable&\Cake\ORM\Association\BelongsToMany $Vendas
 *
 * @method \App\Model\Entity\Fruta newEmptyEntity()
 * @method \App\Model\Entity\Fruta newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Fruta[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Fruta get($primaryKey, $options = [])
 * @method \App\Model\Entity\Fruta findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Fruta patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Fruta[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Fruta|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Fruta saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Fruta[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Fruta[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Fruta[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Fruta[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class FrutasTable extends Table
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

        $this->setTable('frutas');
        $this->setDisplayField('nome_fruta');
        $this->setPrimaryKey('id_fruta');

        $this->belongsTo('TipoClassificacao', [
            'foreignKey' => 'classificacao_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsToMany('Vendas', [
            'foreignKey' => 'fruta_id',
            'targetForeignKey' => 'venda_id',
            'joinTable' => 'frutas_vendas',
        ]);
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
            ->scalar('nome_fruta')
            ->maxLength('nome_fruta', 200)
            ->requirePresence('nome_fruta', 'create')
            ->notEmptyString('nome_fruta');

        $validator
            ->scalar('classificacao_id')
            ->requirePresence('classificacao_id', 'create')
            ->notEmptyString('classificacao_id');

        $validator
            ->scalar('frescor')
            ->requirePresence('frescor', 'create')
            ->notEmptyString('frescor');

        $validator
            ->integer('quantidade')
            ->requirePresence('quantidade', 'create')
            ->notEmptyString('quantidade');

        $validator
            ->dateTime('created_at')
            ->allowEmptyDateTime('created_at');

        $validator
            ->dateTime('modified_at')
            ->allowEmptyDateTime('modified_at');

        return $validator;
    }
}
