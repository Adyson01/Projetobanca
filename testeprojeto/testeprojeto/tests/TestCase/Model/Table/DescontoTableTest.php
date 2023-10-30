<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DescontoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DescontoTable Test Case
 */
class DescontoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DescontoTable
     */
    protected $Desconto;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Desconto',
        'app.Vendas',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Desconto') ? [] : ['className' => DescontoTable::class];
        $this->Desconto = $this->getTableLocator()->get('Desconto', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Desconto);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DescontoTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
