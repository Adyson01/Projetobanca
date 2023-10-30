<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sesso Entity
 *
 * @property int $id_sessao
 * @property int $usuario_id
 * @property \Cake\I18n\DateTime|null $inicio_sessao
 * @property \Cake\I18n\DateTime|null $fim_sessao
 * @property \Cake\I18n\DateTime|null $created_at
 * @property \Cake\I18n\DateTime|null $modified_at
 *
 * @property \App\Model\Entity\Usuario $usuario
 */
class Sesso extends Entity
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
        'inicio_sessao' => true,
        'fim_sessao' => true,
        'created_at' => true,
        'modified_at' => true,
        'usuario' => true,
    ];
}
