<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * TipoClassificacao Controller
 *
 * @property \App\Model\Table\TipoClassificacaoTable $TipoClassificacao
 */
class TipoClassificacaoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->TipoClassificacao->find();
        $tipoClassificacao = $this->paginate($query);

        $this->set(compact('tipoClassificacao'));
    }

    /**
     * View method
     *
     * @param string|null $id Tipo Classificacao id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipoClassificacao = $this->TipoClassificacao->get($id, contain: []);
        $this->set(compact('tipoClassificacao'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipoClassificacao = $this->TipoClassificacao->newEmptyEntity();
        if ($this->request->is('post')) {
            $tipoClassificacao = $this->TipoClassificacao->patchEntity($tipoClassificacao, $this->request->getData());
            if ($this->TipoClassificacao->save($tipoClassificacao)) {
                $this->Flash->success(__('The tipo classificacao has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipo classificacao could not be saved. Please, try again.'));
        }
        $this->set(compact('tipoClassificacao'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipo Classificacao id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipoClassificacao = $this->TipoClassificacao->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipoClassificacao = $this->TipoClassificacao->patchEntity($tipoClassificacao, $this->request->getData());
            if ($this->TipoClassificacao->save($tipoClassificacao)) {
                $this->Flash->success(__('The tipo classificacao has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipo classificacao could not be saved. Please, try again.'));
        }
        $this->set(compact('tipoClassificacao'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipo Classificacao id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipoClassificacao = $this->TipoClassificacao->get($id);
        if ($this->TipoClassificacao->delete($tipoClassificacao)) {
            $this->Flash->success(__('The tipo classificacao has been deleted.'));
        } else {
            $this->Flash->error(__('The tipo classificacao could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
