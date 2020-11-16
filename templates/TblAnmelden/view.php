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
            <?= $this->Html->link(__('Edit Tbl Anmelden'), ['action' => 'edit', $tblAnmelden->ID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Tbl Anmelden'), ['action' => 'delete', $tblAnmelden->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $tblAnmelden->ID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tbl Anmelden'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Tbl Anmelden'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tblAnmelden view content">
            <h3><?= h($tblAnmelden->ID) ?></h3>
            <table>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($tblAnmelden->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Passwort') ?></th>
                    <td><?= h($tblAnmelden->Passwort) ?></td>
                </tr>
                <tr>
                    <th><?= __('ID') ?></th>
                    <td><?= $this->Number->format($tblAnmelden->ID) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
