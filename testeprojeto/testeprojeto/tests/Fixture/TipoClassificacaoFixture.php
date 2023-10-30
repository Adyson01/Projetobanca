<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TipoClassificacaoFixture
 */
class TipoClassificacaoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'tipo_classificacao';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id_classificacao' => 1,
                'tipo' => 'Lorem ipsum dolor sit amet',
                'created_at' => 1698598373,
                'updated_at' => 1698598373,
            ],
        ];
        parent::init();
    }
}
