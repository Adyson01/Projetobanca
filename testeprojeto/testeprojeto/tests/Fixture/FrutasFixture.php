<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FrutasFixture
 */
class FrutasFixture extends TestFixture
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
                'id_fruta' => 1,
                'nome_fruta' => 'Lorem ipsum dolor sit amet',
                'classificacao' => 'Lorem ipsum dolor sit amet',
                'frescor' => 'Lorem ipsum dolor sit amet',
                'quantidade' => 1,
                'created_at' => 1698593948,
                'modified_at' => 1698593948,
            ],
        ];
        parent::init();
    }
}
