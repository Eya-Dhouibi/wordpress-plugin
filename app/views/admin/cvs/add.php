<h2>Add Cv</h2>

<?php echo $this->form->create($model->name, array('is_admin' => $this->is_admin)); ?>
<?php echo $this->form->open_admin_table(); ?>
<?php echo $this->form->input('nom'); ?>
<?php echo $this->form->input('email'); ?>
<?php echo $this->form->input('tel'); ?>
<?php echo $this->form->input('titre'); ?>
<?php echo $this->form->input('formations'); ?>
<?php echo $this->form->input('experiences'); ?>
<?php echo $this->form->close_admin_table(); ?>
<?php echo $this->form->end('Add'); ?>