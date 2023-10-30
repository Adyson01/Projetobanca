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
            <?= $this->Html->link(__('List Desconto'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="desconto form content">
            <?= $this->Form->create($desconto) ?>
            <fieldset>
                <legend><?= __('Add Desconto') ?></legend>
                <?php
                    echo $this->Form->control('tipo');
                    echo $this->Form->control('created_at');
                    echo $this->Form->control('updated_at');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
