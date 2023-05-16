<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Dado> $dados
 */
?>
<div class="dados index content">
    <div class="table-responsive">
      <?= $this->Form->create(null, ['type' => 'file']) ?>
      <?= $this->Form->control('Arquivo', ['type' => 'file']) ?>
      <?= $this->Form->button(__('Enviar')) ?>
      <?= $this->Form->end() ?>
    </div>
</div>
