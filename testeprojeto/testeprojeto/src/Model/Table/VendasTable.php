<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Vendas Model
 *
 * @property \App\Model\Table\UsuariosTable&\Cake\ORM\Association\BelongsTo $Usuarios
 * @property \App\Model\Table\FrutasTable&\Cake\ORM\Association\BelongsToMany $Frutas
 *
 * @method \App\Model\Entity\Venda newEmptyEntity()
 * @method \App\Model\Entity\Venda newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Venda[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Venda get($primaryKey, $options = [])
 * @method \App\Model\Entity\Venda findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Venda patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Venda[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Venda|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Venda saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Venda[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Venda[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Venda[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Venda[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class VendasTable extends Table
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

        $this->setTable('vendas');
        $this->setDisplayField('id_venda');
        $this->setPrimaryKey('id_venda');
        $this->belongsTo('Desconto', [
            'foreignKey' => 'desconto_id',
            'joinType' => 'INNER',
        ]);

        $this->belongsTo('Usuarios', [
            'foreignKey' => 'usuario_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsToMany('Frutas', [
            'foreignKey' => 'venda_id',
            'targetForeignKey' => 'fruta_id',
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
            ->integer('usuario_id')
            ->notEmptyString('usuario_id');

        $validator
            ->dateTime('horario_venda')
            ->requirePresence('horario_venda', 'create')
            ->notEmptyDateTime('horario_venda');

        $validator
            ->numeric('valor_venda')
            ->requirePresence('valor_venda', 'create')
            ->notEmptyString('valor_venda');

        $validator
            ->scalar('desconto_id')
            ->allowEmptyString('desconto_id');

        $validator
            ->numeric('valor_total')
            ->requirePresence('valor_total', 'create')
            ->notEmptyString('valor_total');

        $validator
            ->dateTime('created_at')
            ->allowEmptyDateTime('created_at');

        $validator
            ->dateTime('modified_at')
            ->allowEmptyDateTime('modified_at');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('usuario_id', 'Usuarios'), ['errorField' => 'usuario_id']);

        return $rules;
    }
}
