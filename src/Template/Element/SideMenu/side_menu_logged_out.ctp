<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Login'), ['action' => 'login']) ?></li>
        <li><?= $this->Html->link(__('Signup'), ['action' => 'signup']) ?></li>
        <li><?= $this->Html->link(__('Forgot Password'), ['action' => 'forgotPassword']) ?></li>
    </ul>
</nav>