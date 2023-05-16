<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\DadosController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;


class DadosControllerTest extends TestCase
{
    use IntegrationTestTrait;

    public function testUpload(): void
    {
        $data = [
            'Arquivo' => [
                'name' => 'dados.txt',
                'type' => 'text/plain',
                'tmp_name' => 'teste.txt',
                'error' => UPLOAD_ERR_OK,
                'size' => 123,
            ],
        ];
    
        $this->post('/dados/upload', $data);
    
        $this->assertResponseSuccess();
        $this->assertFlashMessage('Arquivo processado e salvado com sucesso.');
        $this->assertRedirect(['action' => 'index']);
        // Verifique outras condições necessárias de acordo com o comportamento esperado
    }
    
}
