<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\Event\EventInterface;


/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class PaginasController extends AppController
{
    public function beforeFilter(EventInterface $event)
    {
        $this->ViewBuilder()->setLayout('default');
        parent::beforeFilter($event);
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function inicio() {}
    public function sobre() {}
    public function topJogos()
    {
        $gamesTable = $this->fetchTable('Games'); // Nome da tabela (Model)

        $games = $gamesTable->find()->all();
       
        $this->set(compact('games'));
    }
    public function topmusicas() {
        $songsTable = $this->fetchTable('Songs'); // Nome da tabela (Model)

        $songs = $songsTable->find()->all();

        $this->set(compact('songs'));
    }
    public function aura() {}
}
