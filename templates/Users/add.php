<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Lista Usuários'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Adicionar Usuário') ?></legend>
                <?php
                    echo $this->Form->control('name', ['label' => 'Nome Completo']);
                    echo $this->Form->control('username',[ 'label' => 'Nome de Usuário']);
                    echo $this->Form->control('password',[ 'label' => 'Senha']);
                    echo $this->Form->control('email',['label' => 'E-mail']);
                    echo $this->Form->control('ativo');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Salvar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
