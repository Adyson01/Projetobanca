<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario $usuario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Usuario'), ['action' => 'edit', $usuario->id_usuario], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Usuario'), ['action' => 'delete', $usuario->id_usuario], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->id_usuario), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Usuarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Usuario'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="usuarios view content">
            <h3><?= h($usuario->nome) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($usuario->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Senha') ?></th>
                    <td><?= h($usuario->senha) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Usuario') ?></th>
                    <td><?= $this->Number->format($usuario->id_usuario) ?></td>
                </tr>
                <tr>
                    <th><?= __('Funcao Id') ?></th>
                    <td><?= $this->Number->format($usuario->funcao_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($usuario->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified At') ?></th>
                    <td><?= h($usuario->modified_at) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Sessoes') ?></h4>
                <?php if (!empty($usuario->sessoes)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id Sessao') ?></th>
                            <th><?= __('Usuario Id') ?></th>
                            <th><?= __('Inicio Sessao') ?></th>
                            <th><?= __('Fim Sessao') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Modified At') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($usuario->sessoes as $sessoes) : ?>
                        <tr>
                            <td><?= h($sessoes->id_sessao) ?></td>
                            <td><?= h($sessoes->usuario_id) ?></td>
                            <td><?= h($sessoes->inicio_sessao) ?></td>
                            <td><?= h($sessoes->fim_sessao) ?></td>
                            <td><?= h($sessoes->created_at) ?></td>
                            <td><?= h($sessoes->modified_at) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Sessoes', 'action' => 'view', $sessoes->id_sessao]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Sessoes', 'action' => 'edit', $sessoes->id_sessao]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sessoes', 'action' => 'delete', $sessoes->id_sessao], ['confirm' => __('Are you sure you want to delete # {0}?', $sessoes->id_sessao)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Vendas') ?></h4>
                <?php if (!empty($usuario->vendas)) : ?>
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
                        <?php foreach ($usuario->vendas as $vendas) : ?>
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
