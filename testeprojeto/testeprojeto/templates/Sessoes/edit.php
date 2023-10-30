<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sesso $sesso
 * @var string[]|\Cake\Collection\CollectionInterface $usuarios
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $sesso->id_sessao],
                ['confirm' => __('Are you sure you want to delete # {0}?', $sesso->id_sessao), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Sessoes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="sessoes form content">
            <?= $this->Form->create($sesso) ?>
            <fieldset>
                <legend><?= __('Edit Sesso') ?></legend>
                <?php
                    echo $this->Form->control('usuario_id', ['options' => $usuarios]);
                    echo $this->Form->control('inicio_sessao');
                    echo $this->Form->control('fim_sessao');
                    echo $this->Form->control('created_at');
                    echo $this->Form->control('modified_at');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
