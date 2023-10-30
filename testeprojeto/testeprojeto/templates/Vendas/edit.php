<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Venda $venda
 * @var string[]|\Cake\Collection\CollectionInterface $usuarios
 * @var string[]|\Cake\Collection\CollectionInterface $frutas
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $venda->id_venda],
                ['confirm' => __('Are you sure you want to delete # {0}?', $venda->id_venda), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Vendas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="vendas form content">
            <?= $this->Form->create($venda) ?>
            <fieldset>
                <legend><?= __('Edit Venda') ?></legend>
                <?php
                    echo $this->Form->control('usuario_id', ['options' => $usuarios]);
                    echo $this->Form->control('horario_venda');
                    echo $this->Form->control('valor_venda');
                    echo $this->Form->control('desconto_id', ['options' => $desconto]);
                    echo $this->Form->control('valor_total');
                    echo $this->Form->control('created_at');
                    echo $this->Form->control('modified_at');
                    echo $this->Form->control('frutas._ids', ['options' => $frutas]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
