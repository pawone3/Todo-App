<p class="bg-success">
	<?php
		if($this->session->flashdata('register_success')):
			echo $this->session->flashdata('register_success');
		endif;
	?>
</p>


<p class="bg-success">
	<?php
		if($this->session->flashdata('login_success')):
			echo $this->session->flashdata('login_success');
		endif;
	?>
</p>



<p class="bg-danger">
	<?php
		if($this->session->flashdata('login_failed')):
			echo $this->session->flashdata('login_failed');
		endif;
	?>
</p>



<p class="bg-danger">
	<?php
		if($this->session->flashdata('no_access')):
			echo $this->session->flashdata('no_access');
		endif;
	?>
</p> 


<div class="jumbotron">
	<h2 class="text-center">Todo App</h2>
</div>


<?php 
	if(isset($projects)):
?>


<table class="table table-bordered table-striped table-hover">
	<thead>
		<tr>
			<th>
				Project Name
			</th>
			<th>
				Description
			</th>
			<th>View</th>
		</tr>
	</thead>
	<tbody>
		<?php 

			foreach($projects as $project):
		?>

		<tr>
				<td> <?php echo $project->project_name;?>
				</td>
				<td> <?php echo $project->project_body; ?>
				</td>
				<td><a href="<?php echo base_url();?>Projects/display/<?php echo $project->id?>">View</a></td>
				
		</tr>

		<?php
			endforeach;
		?>
	</tbody>
</table>

<?php 
	endif;
?>