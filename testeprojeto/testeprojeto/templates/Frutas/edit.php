<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fruta $fruta
 * @var string[]|\Cake\Collection\CollectionInterface $vendas
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $fruta->id_fruta],
                ['confirm' => __('Are you sure you want to delete # {0}?', $fruta->id_fruta), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Frutas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="frutas form content">
            <?= $this->Form->create($fruta) ?>
            <fieldset>
                <legend><?= __('Edit Fruta') ?></legend>
                <?php
                    echo $this->Form->control('nome_fruta');
                    echo $this->Form->control('classificacao_id',['options' => $tipoClassificacao]);
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
