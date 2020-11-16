<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TblAnmelden $tblAnmelden
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Tbl Anmelden'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tblAnmelden form content">
            <?= $this->Form->create($tblAnmelden) ?>
            <fieldset>
                <legend><?= __('Add Tbl Anmelden') ?></legend>
                <?php
                    echo $this->Form->control('email');
                    echo $this->Form->control('Passwort');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
