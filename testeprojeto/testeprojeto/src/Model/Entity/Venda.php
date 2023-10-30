<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Venda Entity
 *
 * @property int $id_venda
 * @property int $usuario_id
 * @property \Cake\I18n\DateTime $horario_venda
 * @property float $valor_venda
 * @property string|null $desconto
 * @property float $valor_total
 * @property \Cake\I18n\DateTime|null $created_at
 * @property \Cake\I18n\DateTime|null $modified_at
 *
 * @property \App\Model\Entity\Usuario $usuario
 * @property \App\Model\Entity\Fruta[] $frutas
 */
class Venda extends Entity
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
        'usuario_id' => true,
        'horario_venda' => true,
        'valor_venda' => true,
        'desconto' => true,
        'valor_total' => true,
        'created_at' => true,
        'modified_at' => true,
        'usuario' => true,
        'frutas' => true,
    ];
}
