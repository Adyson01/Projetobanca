<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FuncoesFixture
 */
class FuncoesFixture extends TestFixture
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
                'id_funcao' => 1,
                'tipo_funcao' => 'Lorem ipsum dolor sit amet',
                'created_at' => 1698587889,
                'modified_at' => 1698587889,
            ],
        ];
        parent::init();
    }
}
