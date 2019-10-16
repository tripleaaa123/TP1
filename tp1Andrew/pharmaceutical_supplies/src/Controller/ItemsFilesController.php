<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ItemsFiles Controller
 *
 * @property \App\Model\Table\ItemsFilesTable $ItemsFiles
 *
 * @method \App\Model\Entity\ItemsFile[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ItemsFilesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Items', 'Files']
        ];
        $itemsFiles = $this->paginate($this->ItemsFiles);

        $this->set(compact('itemsFiles'));
    }

    /**
     * View method
     *
     * @param string|null $id Items File id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $itemsFile = $this->ItemsFiles->get($id, [
            'contain' => ['Items', 'Files']
        ]);

        $this->set('itemsFile', $itemsFile);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $itemsFile = $this->ItemsFiles->newEntity();
        if ($this->request->is('post')) {
            $itemsFile = $this->ItemsFiles->patchEntity($itemsFile, $this->request->getData());
            if ($this->ItemsFiles->save($itemsFile)) {
                $this->Flash->success(__('The items file has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The items file could not be saved. Please, try again.'));
        }
        $items = $this->ItemsFiles->Items->find('list', ['limit' => 200]);
        $files = $this->ItemsFiles->Files->find('list', ['limit' => 200]);
        $this->set(compact('itemsFile', 'items', 'files'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Items File id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $itemsFile = $this->ItemsFiles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $itemsFile = $this->ItemsFiles->patchEntity($itemsFile, $this->request->getData());
            if ($this->ItemsFiles->save($itemsFile)) {
                $this->Flash->success(__('The items file has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The items file could not be saved. Please, try again.'));
        }
        $items = $this->ItemsFiles->Items->find('list', ['limit' => 200]);
        $files = $this->ItemsFiles->Files->find('list', ['limit' => 200]);
        $this->set(compact('itemsFile', 'items', 'files'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Items File id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $itemsFile = $this->ItemsFiles->get($id);
        if ($this->ItemsFiles->delete($itemsFile)) {
            $this->Flash->success(__('The items file has been deleted.'));
        } else {
            $this->Flash->error(__('The items file could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
