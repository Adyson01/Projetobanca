<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DescontoFixture
 */
class DescontoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'desconto';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id_desconto' => 1,
                'tipo' => 'Lorem ipsum dolor sit amet',
                'created_at' => 1698681481,
                'updated_at' => 1698681481,
            ],
        ];
        parent::init();
    }
}
