<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * VendasFixture
 */
class VendasFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id_venda' => 1,
                'usuario_id' => 1,
                'horario_venda' => 1698594023,
                'valor_venda' => 1,
                'desconto' => 'Lorem ipsum dolor sit amet',
                'valor_total' => 1,
                'created_at' => 1698594023,
                'modified_at' => 1698594023,
            ],
        ];
        parent::init();
    }
}
