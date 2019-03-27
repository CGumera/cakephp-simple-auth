<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<?= $this->element('SideMenu/side_menu_logged_out') ?>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend>Sign Up</legend>
        <div class="form-group">
            <?= $this->Form->control('email', ['class' => 'form-control', 'id' => 'email', 'placeholder' => 'Enter email']) ?>
        </div>
        <div class="form-group">
            <?= $this->Form->control('phone', ['class' => 'form-control', 'id' => 'phone', 'placeholder' => 'Enter phone']) ?>
        </div>
        <div class="form-group">
            <?= $this->Form->control('password', ['class' => 'form-control', 'id' => 'password', 'placeholder' => 'Enter password', 'type' => 'password']) ?>
        </div>
        <?= $this->Form->button(__('Signup'), ['class' => 'btn btn-primary']) ?>
    </fieldset>
    <?= $this->Form->end() ?>
</div>
