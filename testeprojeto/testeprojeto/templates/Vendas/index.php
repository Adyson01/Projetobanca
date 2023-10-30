<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Venda> $vendas
 */
?>
<div class="vendas index content">
    <?= $this->Html->link(__('New Venda'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Vendas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_venda') ?></th>
                    <th><?= $this->Paginator->sort('usuario_id') ?></th>
                    <th><?= $this->Paginator->sort('horario_venda') ?></th>
                    <th><?= $this->Paginator->sort('valor_venda') ?></th>
                    <th><?= $this->Paginator->sort('desconto_id') ?></th>
                    <th><?= $this->Paginator->sort('valor_total') ?></th>
                    <th><?= $this->Paginator->sort('created_at') ?></th>
                    <th><?= $this->Paginator->sort('modified_at') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($vendas as $venda): ?>
                <tr>
                    <td><?= $this->Number->format($venda->id_venda) ?></td>
                    <td><?= $venda->hasValue('usuario') ? $this->Html->link($venda->usuario->nome, ['controller' => 'Usuarios', 'action' => 'view', $venda->usuario->id_usuario]) : '' ?></td>
                    <td><?= h($venda->horario_venda) ?></td>
                    <td><?= $this->Number->format($venda->valor_venda) ?></td>
                    <td><?= h($venda->desconto) ?></td>
                    <td><?= $this->Number->format($venda->valor_total) ?></td>
                    <td><?= h($venda->created_at) ?></td>
                    <td><?= h($venda->modified_at) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $venda->id_venda]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $venda->id_venda]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $venda->id_venda], ['confirm' => __('Are you sure you want to delete # {0}?', $venda->id_venda)]) ?>
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
