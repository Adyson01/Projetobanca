<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\TipoClassificacao> $tipoClassificacao
 */
?>
<div class="tipoClassificacao index content">
    <?= $this->Html->link(__('New Tipo Classificacao'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tipo Classificacao') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_classificacao') ?></th>
                    <th><?= $this->Paginator->sort('tipo') ?></th>
                    <th><?= $this->Paginator->sort('created_at') ?></th>
                    <th><?= $this->Paginator->sort('updated_at') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tipoClassificacao as $tipoClassificacao): ?>
                <tr>
                    <td><?= $this->Number->format($tipoClassificacao->id_classificacao) ?></td>
                    <td><?= h($tipoClassificacao->tipo) ?></td>
                    <td><?= h($tipoClassificacao->created_at) ?></td>
                    <td><?= h($tipoClassificacao->updated_at) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $tipoClassificacao->id_classificacao]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tipoClassificacao->id_classificacao]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tipoClassificacao->id_classificacao], ['confirm' => __('Are you sure you want to delete # {0}?', $tipoClassificacao->id_classificacao)]) ?>
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
