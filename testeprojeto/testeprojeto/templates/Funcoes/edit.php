<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Funco $funco
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $funco->id_funcao],
                ['confirm' => __('Are you sure you want to delete # {0}?', $funco->id_funcao), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Funcoes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="funcoes form content">
            <?= $this->Form->create($funco) ?>
            <fieldset>
                <legend><?= __('Edit Funco') ?></legend>
                <?php
                    echo $this->Form->control('tipo_funcao');
                    echo $this->Form->control('created_at');
                    echo $this->Form->control('modified_at');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
