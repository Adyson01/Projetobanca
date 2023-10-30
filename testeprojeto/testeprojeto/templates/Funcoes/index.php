<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Funco> $funcoes
 */
?>
<div class="funcoes index content">
    <?= $this->Html->link(__('New Funco'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Funcoes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_funcao') ?></th>
                    <th><?= $this->Paginator->sort('tipo_funcao') ?></th>
                    <th><?= $this->Paginator->sort('created_at') ?></th>
                    <th><?= $this->Paginator->sort('modified_at') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($funcoes as $funco): ?>
                <tr>
                    <td><?= $this->Number->format($funco->id_funcao) ?></td>
                    <td><?= h($funco->tipo_funcao) ?></td>
                    <td><?= h($funco->created_at) ?></td>
                    <td><?= h($funco->modified_at) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $funco->id_funcao]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $funco->id_funcao]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $funco->id_funcao], ['confirm' => __('Are you sure you want to delete # {0}?', $funco->id_funcao)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
