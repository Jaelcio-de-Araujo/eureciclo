<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DadosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DadosTable Test Case
 */
class DadosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DadosTable
     */
    protected $Dados;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Dados',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Dados') ? [] : ['className' => DadosTable::class];
        $this->Dados = $this->getTableLocator()->get('Dados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Dados);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DadosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
