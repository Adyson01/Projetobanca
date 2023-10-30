<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Fruta Entity
 *
 * @property int $id_fruta
 * @property string $nome_fruta
 * @property string $classificacao
 * @property string $frescor
 * @property int $quantidade
 * @property \Cake\I18n\DateTime|null $created_at
 * @property \Cake\I18n\DateTime|null $modified_at
 *
 * @property \App\Model\Entity\Venda[] $vendas
 */
class Fruta extends Entity
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
        'nome_fruta' => true,
        'classificacao' => true,
        'frescor' => true,
        'quantidade' => true,
        'created_at' => true,
        'modified_at' => true,
        'vendas' => true,
    ];
}
