<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fruta $fruta
 * @var \Cake\Collection\CollectionInterface|string[] $vendas
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Frutas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="frutas form content">
            <?= $this->Form->create($fruta) ?>
            <fieldset>
                <legend><?= __('Add Fruta') ?></legend>
                <?php
                    echo $this->Form->control('nome_fruta');
                    echo $this->Form->control('classificacao_id', ['options' => $tipoClassificacao]);
                    echo $this->Form->control('frescor');
                    echo $this->Form->control('quantidade');
                    echo $this->Form->control('created_at');
                    echo $this->Form->control('modified_at');
                    echo $this->Form->control('vendas._ids', ['options' => $vendas]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
