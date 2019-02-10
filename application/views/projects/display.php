<div class="row">

<div class="col-md-9 col-xs-12">
	<h1>Project Name: <?php echo $project_data->project_name; ?></h1>
	<p><?php echo $project_data->created_at;?></p>
	<p><?php echo $project_data->project_body;?></p>
</div>


<div class="col-md-3 col-xs-12">
	<ul class="list-group">
		<h4>Project Actions</h4>
		<li class="list-group-item"><a href="<?php echo base_url(); ?>Tasks/create">Create Task</a></li> 
		<li class="list-group-item"><a href="<?php echo base_url(); ?>Projects/edit/<?php echo $project_data->id;?>">Edit Task</a></li>
		<li class="list-group-item"><a href="<?php echo base_url(); ?>Projects/delete/<?php echo $project_data->id;?>">Delete Task</a></li>
	</ul>
</div>
</div>
