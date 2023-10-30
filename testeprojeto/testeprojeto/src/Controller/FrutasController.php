<?php
declare(strict_types=1);

namespace App\Controller;
use App\Controller\AppController;
/**
 * Frutas Controller
 *
 * @property \App\Model\Table\FrutasTable $Frutas
 * @property \App\Model\Table\TipoClassificacaoTable $tipoClassificacao
 */
class FrutasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Frutas->find();
        $frutas = $this->paginate($query);

        $this->set(compact('frutas'));
    }

    /**
     * View method
     *
     * @param string|null $id Fruta id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fruta = $this->Frutas->get($id, ['contain' => [],]);
        $this->set(compact('fruta'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fruta = $this->Frutas->newEmptyEntity();
        if ($this->request->is('post')) {
            $fruta = $this->Frutas->patchEntity($fruta, $this->request->getData());
            if ($this->Frutas->save($fruta)) {
                $this->Flash->success(__('The fruta has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fruta could not be saved. Please, try again.'));
        }
        $vendas = $this->Frutas->Vendas->find('list', ['limit' => 200])->all();
        $tipoClassificacao = $this->Frutas->TipoClassificacao->find('list', ['limit' => 200])->all();
        $this->set(compact('fruta', 'vendas', 'tipoClassificacao'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Fruta id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fruta = $this->Frutas->get($id, ['contain' => ['Vendas']]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fruta = $this->Frutas->patchEntity($fruta, $this->request->getData());
            if ($this->Frutas->save($fruta)) {
                $this->Flash->success(__('The fruta has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fruta could not be saved. Please, try again.'));
        }
        
        $vendas = $this->Frutas->Vendas->find('list', ['limit' => 200])->all();
        $tipoClassificacao = $this->Frutas->TipoClassificacao->find('list', ['limit' => 200])->all();
        $this->set(compact('fruta', 'vendas', 'tipoClassificacao'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Fruta id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fruta = $this->Frutas->get($id);
        if ($this->Frutas->delete($fruta)) {
            $this->Flash->success(__('The fruta has been deleted.'));
        } else {
            $this->Flash->error(__('The fruta could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
