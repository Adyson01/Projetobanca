<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sesso $sesso
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Sesso'), ['action' => 'edit', $sesso->id_sessao], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Sesso'), ['action' => 'delete', $sesso->id_sessao], ['confirm' => __('Are you sure you want to delete # {0}?', $sesso->id_sessao), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Sessoes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Sesso'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="sessoes view content">
            <h3><?= h($sesso->id_sessao) ?></h3>
            <table>
                <tr>
                    <th><?= __('Usuario') ?></th>
                    <td><?= $sesso->hasValue('usuario') ? $this->Html->link($sesso->usuario->nome, ['controller' => 'Usuarios', 'action' => 'view', $sesso->usuario->id_usuario]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Sessao') ?></th>
                    <td><?= $this->Number->format($sesso->id_sessao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Inicio Sessao') ?></th>
                    <td><?= h($sesso->inicio_sessao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fim Sessao') ?></th>
                    <td><?= h($sesso->fim_sessao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($sesso->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified At') ?></th>
                    <td><?= h($sesso->modified_at) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
