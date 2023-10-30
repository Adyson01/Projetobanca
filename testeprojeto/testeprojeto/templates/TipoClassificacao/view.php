<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TipoClassificacao $tipoClassificacao
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Tipo Classificacao'), ['action' => 'edit', $tipoClassificacao->id_classificacao], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Tipo Classificacao'), ['action' => 'delete', $tipoClassificacao->id_classificacao], ['confirm' => __('Are you sure you want to delete # {0}?', $tipoClassificacao->id_classificacao), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tipo Classificacao'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Tipo Classificacao'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="tipoClassificacao view content">
            <h3><?= h($tipoClassificacao->tipo) ?></h3>
            <table>
                <tr>
                    <th><?= __('Tipo') ?></th>
                    <td><?= h($tipoClassificacao->tipo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Classificacao') ?></th>
                    <td><?= $this->Number->format($tipoClassificacao->id_classificacao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($tipoClassificacao->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated At') ?></th>
                    <td><?= h($tipoClassificacao->updated_at) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
