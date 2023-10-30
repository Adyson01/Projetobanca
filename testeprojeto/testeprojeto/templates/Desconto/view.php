<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Desconto $desconto
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Desconto'), ['action' => 'edit', $desconto->id_desconto], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Desconto'), ['action' => 'delete', $desconto->id_desconto], ['confirm' => __('Are you sure you want to delete # {0}?', $desconto->id_desconto), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Desconto'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Desconto'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="desconto view content">
            <h3><?= h($desconto->tipo) ?></h3>
            <table>
                <tr>
                    <th><?= __('Tipo') ?></th>
                    <td><?= h($desconto->tipo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Desconto') ?></th>
                    <td><?= $this->Number->format($desconto->id_desconto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($desconto->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated At') ?></th>
                    <td><?= h($desconto->updated_at) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Vendas') ?></h4>
                <?php if (!empty($desconto->vendas)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id Venda') ?></th>
                            <th><?= __('Usuario Id') ?></th>
                            <th><?= __('Horario Venda') ?></th>
                            <th><?= __('Valor Venda') ?></th>
                            <th><?= __('Valor Total') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Modified At') ?></th>
                            <th><?= __('Desconto Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($desconto->vendas as $vendas) : ?>
                        <tr>
                            <td><?= h($vendas->id_venda) ?></td>
                            <td><?= h($vendas->usuario_id) ?></td>
                            <td><?= h($vendas->horario_venda) ?></td>
                            <td><?= h($vendas->valor_venda) ?></td>
                            <td><?= h($vendas->valor_total) ?></td>
                            <td><?= h($vendas->created_at) ?></td>
                            <td><?= h($vendas->modified_at) ?></td>
                            <td><?= h($vendas->desconto_id) ?></td>
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
