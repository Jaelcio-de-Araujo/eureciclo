<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DadosFixture
 */
class DadosFixture extends TestFixture
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
                'id' => 1,
                'compradores' => 'Lorem ipsum dolor sit a',
                'descricao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'preco_unitario' => 'Lorem ipsum d',
                'quantidade' => 1,
                'endereco' => 'Lorem ipsum dolor sit amet',
                'fornecedor' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
