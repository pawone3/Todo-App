
<h2>Edit Project</h2>

<?php 
$attribute=array('id'=>'edit_project','class'=>'form-horizontal');

	
echo validation_errors('<p class="bg-danger">');

if($this->session->flashdata('errors')):
	echo $this->session->flashdata('errors');
endif;

?>


<?php echo form_open('Projects/edit/'.$project_data->id.'',$attribute);?>



<div class="form-group">

	<?php	

		$data=array(
			'class'=>'form-control',
			'name'=>'project_name',
			'placeholder'=>'Enter Project Name',
			'value'=>"$project_data->project_name"
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
			'name'=>'project_body',
			'value'=>"$project_data->project_body"
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
			'name'=>$project_data->id,
			'value'=>'Edit'
		);

		echo form_submit($data);

	?>
	
</div>

<?php echo form_close();
?> 