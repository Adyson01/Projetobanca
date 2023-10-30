<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Desconto> $desconto
 */
?>
<div class="desconto index content">
    <?= $this->Html->link(__('New Desconto'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Desconto') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_desconto') ?></th>
                    <th><?= $this->Paginator->sort('tipo') ?></th>
                    <th><?= $this->Paginator->sort('created_at') ?></th>
                    <th><?= $this->Paginator->sort('updated_at') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($desconto as $desconto): ?>
                <tr>
                    <td><?= $this->Number->format($desconto->id_desconto) ?></td>
                    <td><?= h($desconto->tipo) ?></td>
                    <td><?= h($desconto->created_at) ?></td>
                    <td><?= h($desconto->updated_at) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $desconto->id_desconto]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $desconto->id_desconto]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $desconto->id_desconto], ['confirm' => __('Are you sure you want to delete # {0}?', $desconto->id_desconto)]) ?>
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
