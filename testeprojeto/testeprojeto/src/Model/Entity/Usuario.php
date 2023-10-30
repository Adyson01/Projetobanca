<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Usuario Entity
 *
 * @property int $id_usuario
 * @property string $nome
 * @property string $senha
 * @property int $funcao_id
 * @property \Cake\I18n\DateTime|null $created_at
 * @property \Cake\I18n\DateTime|null $modified_at
 *
 * @property \App\Model\Entity\Sesso[] $sessoes
 * @property \App\Model\Entity\Venda[] $vendas
 */
class Usuario extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'nome' => true,
        'senha' => true,
        'funcao_id' => true,
        'created_at' => true,
        'modified_at' => true,
        'sessoes' => true,
        'vendas' => true,
    ];
}
