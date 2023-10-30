<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Sesso> $sessoes
 */
?>
<div class="sessoes index content">
    <?= $this->Html->link(__('New Sesso'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Sessoes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_sessao') ?></th>
                    <th><?= $this->Paginator->sort('usuario_id') ?></th>
                    <th><?= $this->Paginator->sort('inicio_sessao') ?></th>
                    <th><?= $this->Paginator->sort('fim_sessao') ?></th>
                    <th><?= $this->Paginator->sort('created_at') ?></th>
                    <th><?= $this->Paginator->sort('modified_at') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($sessoes as $sesso): ?>
                <tr>
                    <td><?= $this->Number->format($sesso->id_sessao) ?></td>
                    <td><?= $sesso->hasValue('usuario') ? $this->Html->link($sesso->usuario->nome, ['controller' => 'Usuarios', 'action' => 'view', $sesso->usuario->id_usuario]) : '' ?></td>
                    <td><?= h($sesso->inicio_sessao) ?></td>
                    <td><?= h($sesso->fim_sessao) ?></td>
                    <td><?= h($sesso->created_at) ?></td>
                    <td><?= h($sesso->modified_at) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $sesso->id_sessao]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sesso->id_sessao]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sesso->id_sessao], ['confirm' => __('Are you sure you want to delete # {0}?', $sesso->id_sessao)]) ?>
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
