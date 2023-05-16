<?php
declare(strict_types=1);
namespace App\Controller;
use Cake\Controller\Controller;
use Cake\Http\Exception\NotFoundException;
use Psr\Http\Message\ResponseInterface;
use Laminas\Diactoros\UploadedFile;
use Cake\Datasource\ConnectionManager;
/**
 * Dados Controller
 *
 * @property \App\Model\Table\DadosTable $Dados
 * @method \App\Model\Entity\Dado[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DadosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $dados = $this->paginate($this->Dados);

        $this->set(compact('dados'));
    }

    /**
     * View method
     *
     * @param string|null $id Dado id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dado = $this->Dados->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('dado'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dado = $this->Dados->newEmptyEntity();
        if ($this->request->is('post')) {
            $dado = $this->Dados->patchEntity($dado, $this->request->getData());
            if ($this->Dados->save($dado)) {
                $this->Flash->success(__('Dados enviados com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Os dados não foram  salvos, tente novamente.'));
        }
        $this->set(compact('dado'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Dado id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dado = $this->Dados->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dado = $this->Dados->patchEntity($dado, $this->request->getData());
            if ($this->Dados->save($dado)) {
                $this->Flash->success(__('Dados enviados com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Os dados não foram  salvos, tente novamente.'));
        }
        $this->set(compact('dado'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Dado id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dado = $this->Dados->get($id);
        if ($this->Dados->delete($dado)) {
            $this->Flash->success(__('Dados deletados com sucesso.'));
        } else {
            $this->Flash->error(__('Os dados não foram  deletados, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function upload()
    {
        if ($this->request->is('post')) {
            $file = $this->request->getData('Arquivo');
            if ($file && $file->getClientMediaType() === 'text/plain') {
                $contents = file_get_contents($file->getStream()->getMetadata('uri'));
                $lines = explode("\n", $contents);
                foreach ($lines as $line) {
                    $data = explode("\t", $line);
                    if (count($data) >= 5) {
                        $entity = $this->Dados->newEmptyEntity();
                        $entity->compradores = $data[0];
                        $entity->descricao = $data[1];
                        $entity->preco_unitario = isset($data[2]) ? intval($data[2]) : null;
                        $entity->quantidade = isset($data[3]) ? intval($data[3]) : null;
                        $entity->endereco = $data[4];
                        $entity->fornecedor = isset($data[5]) && $data[5] !== '' ? $data[5] : 'N/A'; // Verifica se o valor é válido ou atribui um valor padrão
                        $this->Dados->save($entity);
                    }
                }
                $this->Flash->success(__('Arquivo processado e salvado com sucesso.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Por favor, envie um arquivo .txt.'));
            }
        }
    }
    
}