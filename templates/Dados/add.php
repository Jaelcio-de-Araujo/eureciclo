<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dado $dado
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Html->link(__('Listar dados'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="dados form content">
            <?= $this->Form->create($dado) ?>
            <fieldset>
                <legend><?= __('Inseir dado') ?></legend>
                <?php
                    echo $this->Form->control('compradores');
                    echo $this->Form->control('descricao');
                    echo $this->Form->control('preco_unitario');
                    echo $this->Form->control('quantidade');
                    echo $this->Form->control('endereco');
                    echo $this->Form->control('fornecedor');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Cadastrar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
