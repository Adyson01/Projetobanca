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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tipoClassificacao->id_classificacao],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tipoClassificacao->id_classificacao), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Tipo Classificacao'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="tipoClassificacao form content">
            <?= $this->Form->create($tipoClassificacao) ?>
            <fieldset>
                <legend><?= __('Edit Tipo Classificacao') ?></legend>
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
