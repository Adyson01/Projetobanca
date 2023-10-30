<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Funco $funco
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Funco'), ['action' => 'edit', $funco->id_funcao], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Funco'), ['action' => 'delete', $funco->id_funcao], ['confirm' => __('Are you sure you want to delete # {0}?', $funco->id_funcao), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Funcoes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Funco'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="funcoes view content">
            <h3><?= h($funco->tipo_funcao) ?></h3>
            <table>
                <tr>
                    <th><?= __('Tipo Funcao') ?></th>
                    <td><?= h($funco->tipo_funcao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Funcao') ?></th>
                    <td><?= $this->Number->format($funco->id_funcao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($funco->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified At') ?></th>
                    <td><?= h($funco->modified_at) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
