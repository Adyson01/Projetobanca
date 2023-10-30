<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fruta $fruta
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Fruta'), ['action' => 'edit', $fruta->id_fruta], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Fruta'), ['action' => 'delete', $fruta->id_fruta], ['confirm' => __('Are you sure you want to delete # {0}?', $fruta->id_fruta), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Frutas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Fruta'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="frutas view content">
            <h3><?= h($fruta->nome_fruta) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome Fruta') ?></th>
                    <td><?= h($fruta->nome_fruta) ?></td>
                </tr>
                <tr>
                    <th><?= __('Classificacao') ?></th>
                    <td><?= h($fruta->classificacao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Frescor') ?></th>
                    <td><?= h($fruta->frescor) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Fruta') ?></th>
                    <td><?= $this->Number->format($fruta->id_fruta) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantidade') ?></th>
                    <td><?= $this->Number->format($fruta->quantidade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($fruta->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified At') ?></th>
                    <td><?= h($fruta->modified_at) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Vendas') ?></h4>
                <?php if (!empty($fruta->vendas)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id Venda') ?></th>
                            <th><?= __('Usuario Id') ?></th>
                            <th><?= __('Horario Venda') ?></th>
                            <th><?= __('Valor Venda') ?></th>
                            <th><?= __('Desconto') ?></th>
                            <th><?= __('Valor Total') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Modified At') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($fruta->vendas as $vendas) : ?>
                        <tr>
                            <td><?= h($vendas->id_venda) ?></td>
                            <td><?= h($vendas->usuario_id) ?></td>
                            <td><?= h($vendas->horario_venda) ?></td>
                            <td><?= h($vendas->valor_venda) ?></td>
                            <td><?= h($vendas->desconto) ?></td>
                            <td><?= h($vendas->valor_total) ?></td>
                            <td><?= h($vendas->created_at) ?></td>
                            <td><?= h($vendas->modified_at) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Vendas', 'action' => 'view', $vendas->id_venda]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Vendas', 'action' => 'edit', $vendas->id_venda]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Vendas', 'action' => 'delete', $vendas->id_venda], ['confirm' => __('Are you sure you want to delete # {0}?', $vendas->id_venda)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
