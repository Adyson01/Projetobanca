<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SessoesFixture
 */
class SessoesFixture extends TestFixture
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
                'id_sessao' => 1,
                'usuario_id' => 1,
                'inicio_sessao' => 1698587461,
                'fim_sessao' => 1698587461,
                'created_at' => 1698587461,
                'modified_at' => 1698587461,
            ],
        ];
        parent::init();
    }
}
