
<p class="bg-success">
	<?php
		if($this->session->flashdata('Project_edited')):
			echo $this->session->flashdata('Project_edited');
		endif;
	?>
</p>


<p class="bg-success">
<?php
		if($this->session->flashdata('Project_deleted')):
			echo $this->session->flashdata('Project_deleted');
		endif;
	?>
</p>



<p class="bg-success">
	<?php
		if($this->session->flashdata('Project_created')):
			echo $this->session->flashdata('Project_created');
		endif;
	?>
</p>

<h1>Projects</h1>

<a class="btn btn-primary float-md-right"href="<?php echo base_url();?>projects/create">Create Project</a>

<table class="table table-bordered table-striped table-hover">
	<thead>
		<tr>
			<th>
				Project Name
			</th>
			<th>
				Project Body
			</th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody>
		<?php 

			foreach($projects as $project):
		?>

		<tr>
				<td> <a href="<?php echo base_url(); ?>Projects/display/<?php echo $project->id?>"><?php echo $project->project_name;?></a>
				</td>
				<td> <?php echo $project->project_body; ?>
				</td>
				<td><a class="" href="<?php echo base_url(); ?>Projects/delete/<?php echo $project->id ?>"><i class="far fa-calendar-times"></i></a></td>
		</tr>

		<?php
			endforeach;
		?>
	</tbody>
</table>