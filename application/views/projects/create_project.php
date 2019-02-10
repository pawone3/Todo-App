
<h2>Create Project</h2>

<?php 
$attribute=array('id'=>'create_project','class'=>'form-horizontal');

	
echo validation_errors('<p class="bg-danger">');

if($this->session->flashdata('errors')):
	echo $this->session->flashdata('errors');
endif;

?>



<?php echo form_open('Projects/create',$attribute);?>



<div class="form-group">

	<?php	

		$data=array(
			'class'=>'form-control',
			'name'=>'project_name',
			'placeholder'=>'Enter Project Name'
		);

		echo form_label('Project name');
		echo '<br>';
		echo form_input($data);

	?>
	
</div>



<div class="form-group">

	<?php	

		$data=array(
			'class'=>'form-control',
			'name'=>'project_body'
		);

		echo form_label('Project Body');
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