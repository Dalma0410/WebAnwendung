<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * TblAnmelden Controller
 *
 * @property \App\Model\Table\TblAnmeldenTable $TblAnmelden
 * @method \App\Model\Entity\TblAnmelden[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TblAnmeldenController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $tblAnmelden = $this->paginate($this->TblAnmelden);

        $this->set(compact('tblAnmelden'));
    }

    /**
     * View method
     *
     * @param string|null $id Tbl Anmelden id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tblAnmelden = $this->TblAnmelden->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('tblAnmelden'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tblAnmelden = $this->TblAnmelden->newEmptyEntity();
        if ($this->request->is('post')) {
            $tblAnmelden = $this->TblAnmelden->patchEntity($tblAnmelden, $this->request->getData());
            if ($this->TblAnmelden->save($tblAnmelden)) {
                $this->Flash->success(__('The tbl anmelden has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tbl anmelden could not be saved. Please, try again.'));
        }
        $this->set(compact('tblAnmelden'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tbl Anmelden id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tblAnmelden = $this->TblAnmelden->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tblAnmelden = $this->TblAnmelden->patchEntity($tblAnmelden, $this->request->getData());
            if ($this->TblAnmelden->save($tblAnmelden)) {
                $this->Flash->success(__('The tbl anmelden has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tbl anmelden could not be saved. Please, try again.'));
        }
        $this->set(compact('tblAnmelden'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tbl Anmelden id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tblAnmelden = $this->TblAnmelden->get($id);
        if ($this->TblAnmelden->delete($tblAnmelden)) {
            $this->Flash->success(__('The tbl anmelden has been deleted.'));
        } else {
            $this->Flash->error(__('The tbl anmelden could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
