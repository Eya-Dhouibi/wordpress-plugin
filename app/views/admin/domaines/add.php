<h2>Add Domaine</h2>

<?php echo $this->form->create($model->name, array('is_admin' => $this->is_admin)); ?>
<?php echo $this->form->open_admin_table(); ?>
<?php echo $this->form->input('domaine'); ?>
<?php echo $this->form->input('active'); ?>
<?php echo $this->form->close_admin_table(); ?>
<?php echo $this->form->end('Add'); ?>