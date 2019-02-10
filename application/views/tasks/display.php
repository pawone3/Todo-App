
<h1>Tasks</h1>

<a class="btn btn-primary float-md-right"href="<?php echo base_url();?>tasks/create/">Create Tasks</a>

<table class="table table-bordered table-striped table-hover">
	<thead>
		<tr>
			<th>
				Task Name
			</th>
			<th>
				Task Body
			</th>
			<th>Date</th>
		</tr>
	</thead>
	<tbody>
		<?php 

			foreach($task as $tasks):
		?>

		<tr>
				<td> <a href="<?php echo base_url(); ?>Projects/display/<?php ?>"><?php echo $tasks->task_name;?></a>
				</td>
				<td> <?php echo $tasks->task_body; ?>
				</td>
				<td> <?php echo $tasks->date_created; ?>
				</td>
		</tr>

		<?php
			endforeach;
		?>
	</tbody>
</table>