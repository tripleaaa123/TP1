<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * APropos Controller
 *
 *
 */
class AProposController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->set(compact('À propos'));
    }
}