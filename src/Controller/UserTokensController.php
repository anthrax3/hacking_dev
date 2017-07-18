<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UserTokens Controller
 *
 * @property \App\Model\Table\UserTokensTable $UserTokens
 *
 * @method \App\Model\Entity\UserToken[] paginate($object = null, array $settings = [])
 */
class UserTokensController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $userTokens = $this->paginate($this->UserTokens);

        $this->set(compact('userTokens'));
        $this->set('_serialize', ['userTokens']);
    }

    /**
     * View method
     *
     * @param string|null $id User Token id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userToken = $this->UserTokens->get($id, [
            'contain' => []
        ]);

        $this->set('userToken', $userToken);
        $this->set('_serialize', ['userToken']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userToken = $this->UserTokens->newEntity();
        if ($this->request->is('post')) {
            $userToken = $this->UserTokens->patchEntity($userToken, $this->request->getData());
            if ($this->UserTokens->save($userToken)) {
                $this->Flash->success(__('The user token has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user token could not be saved. Please, try again.'));
        }
        $this->set(compact('userToken'));
        $this->set('_serialize', ['userToken']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User Token id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userToken = $this->UserTokens->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userToken = $this->UserTokens->patchEntity($userToken, $this->request->getData());
            if ($this->UserTokens->save($userToken)) {
                $this->Flash->success(__('The user token has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user token could not be saved. Please, try again.'));
        }
        $this->set(compact('userToken'));
        $this->set('_serialize', ['userToken']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User Token id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userToken = $this->UserTokens->get($id);
        if ($this->UserTokens->delete($userToken)) {
            $this->Flash->success(__('The user token has been deleted.'));
        } else {
            $this->Flash->error(__('The user token could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
