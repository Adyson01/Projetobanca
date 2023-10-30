<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Sessoes Controller
 *
 * @property \App\Model\Table\SessoesTable $Sessoes
 */
class SessoesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Sessoes->find()
            ->contain(['Usuarios']);
        $sessoes = $this->paginate($query);

        $this->set(compact('sessoes'));
    }

    /**
     * View method
     *
     * @param string|null $id Sesso id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sesso = $this->Sessoes->get($id, contain: ['Usuarios']);
        $this->set(compact('sesso'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sesso = $this->Sessoes->newEmptyEntity();
        if ($this->request->is('post')) {
            $sesso = $this->Sessoes->patchEntity($sesso, $this->request->getData());
            if ($this->Sessoes->save($sesso)) {
                $this->Flash->success(__('The sesso has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sesso could not be saved. Please, try again.'));
        }
        $usuarios = $this->Sessoes->Usuarios->find('list', limit: 200)->all();
        $this->set(compact('sesso', 'usuarios'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sesso id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sesso = $this->Sessoes->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sesso = $this->Sessoes->patchEntity($sesso, $this->request->getData());
            if ($this->Sessoes->save($sesso)) {
                $this->Flash->success(__('The sesso has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sesso could not be saved. Please, try again.'));
        }
        $usuarios = $this->Sessoes->Usuarios->find('list', limit: 200)->all();
        $this->set(compact('sesso', 'usuarios'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sesso id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sesso = $this->Sessoes->get($id);
        if ($this->Sessoes->delete($sesso)) {
            $this->Flash->success(__('The sesso has been deleted.'));
        } else {
            $this->Flash->error(__('The sesso could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
