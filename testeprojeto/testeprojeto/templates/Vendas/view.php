<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Venda $venda
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Venda'), ['action' => 'edit', $venda->id_venda], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Venda'), ['action' => 'delete', $venda->id_venda], ['confirm' => __('Are you sure you want to delete # {0}?', $venda->id_venda), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Vendas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Venda'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="vendas view content">
            <h3><?= h($venda->id_venda) ?></h3>
            <table>
                <tr>
                    <th><?= __('Usuario') ?></th>
                    <td><?= $venda->hasValue('usuario') ? $this->Html->link($venda->usuario->nome, ['controller' => 'Usuarios', 'action' => 'view', $venda->usuario->id_usuario]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Desconto_id') ?></th>
                    <td><?= h($venda->desconto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Venda') ?></th>
                    <td><?= $this->Number->format($venda->id_venda) ?></td>
                </tr>
                <tr>
                    <th><?= __('Valor Venda') ?></th>
                    <td><?= $this->Number->format($venda->valor_venda) ?></td>
                </tr>
                <tr>
                    <th><?= __('Valor Total') ?></th>
                    <td><?= $this->Number->format($venda->valor_total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Horario Venda') ?></th>
                    <td><?= h($venda->horario_venda) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($venda->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified At') ?></th>
                    <td><?= h($venda->modified_at) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Frutas') ?></h4>
                <?php if (!empty($venda->frutas)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id Fruta') ?></th>
                            <th><?= __('Nome Fruta') ?></th>
                            <th><?= __('Classificacao') ?></th>
                            <th><?= __('Frescor') ?></th>
                            <th><?= __('Quantidade') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Modified At') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($venda->frutas as $frutas) : ?>
                        <tr>
                            <td><?= h($frutas->id_fruta) ?></td>
                            <td><?= h($frutas->nome_fruta) ?></td>
                            <td><?= h($frutas->classificacao) ?></td>
                            <td><?= h($frutas->frescor) ?></td>
                            <td><?= h($frutas->quantidade) ?></td>
                            <td><?= h($frutas->created_at) ?></td>
                            <td><?= h($frutas->modified_at) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Frutas', 'action' => 'view', $frutas->id_fruta]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Frutas', 'action' => 'edit', $frutas->id_fruta]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Frutas', 'action' => 'delete', $frutas->id_fruta], ['confirm' => __('Are you sure you want to delete # {0}?', $frutas->id_fruta)]) ?>
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
