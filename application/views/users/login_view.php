<?php
	
	if(!$this->session->userdata('username')):
?>

<h2>Login Form</h2>

<?php 
$attribute=array('id'=>'login_form','class'=>'form-horizontal');

	
if($this->session->flashdata('errors')):
	echo $this->session->flashdata('errors');
endif;

?>



<?php echo form_open('users/login',$attribute);?>

<div class="form-group">

	<?php	

		$data=array(
			'class'=>'form-control',
			'name'=>'username',
			'placeholder'=>'Enter Username',
			'value'=>set_value('username')
		);

		echo form_label('Username');
		echo '<br>';
		echo form_input($data);

	?>
	
</div>

<div class="form-group">

	<?php	

		$data=array(
			'class'=>'form-control',
			'name'=>'password',
			'placeholder'=>'Enter Password',
			'value'=>set_value('password')
		);

		echo form_label('Password');
		echo '<br>';
		echo form_password($data);

	?>
	
</div>


<div class="form-group">

	<?php	

		$data=array(
			'class'=>'btn btn-default',
			'name'=>'submit',
			'value'=>'submit'
		);

		echo form_submit($data);

	?>
	
</div>

<?php echo form_close();

endif;
?> 
