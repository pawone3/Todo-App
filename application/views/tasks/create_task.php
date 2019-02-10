
<h2>Create Task</h2>

<?php 
$attribute=array('id'=>'create_task','class'=>'form-horizontal');

	
echo validation_errors('<p class="bg-danger">');

if($this->session->flashdata('errors')):
	echo $this->session->flashdata('errors');
endif;

?>



<?php echo form_open('tasks/create',$attribute);?>



<div class="form-group">

	<?php	

		$data=array(
			'class'=>'form-control',
			'name'=>'task_name',
			'placeholder'=>'Enter Task Name'
		);

		echo form_label('Task name');
		echo '<br>';
		echo form_input($data);

	?>
	
</div>



<div class="form-group">

	<?php	

		$data=array(
			'class'=>'form-control',
			'name'=>'Task_body'
		);

		echo form_label('Task Body');
		echo '<br>';
		echo form_textarea($data);

	?>
	
</div>


<div class="form-group">

	<?php	

		$data=array(
			'class'=>'btn btn-default',
			'name'=>'submit',
			'value'=>'Create'
		);

		echo form_submit($data);

	?>
	
</div>

<?php echo form_close();
?> 