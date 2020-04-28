<?php if($this->session->flashdata('event_add')) : ?>
    <?php echo '<p class="alert alert-success mt-3">' .$this->session->flashdata('event_add') . '</p>'; ?>
<?php endif; ?>
<?php if($this->session->flashdata('event_update')) : ?>
    <?php echo '<p class="alert alert-success mt-3">' .$this->session->flashdata('event_update') . '</p>'; ?>
<?php endif; ?>
<?php if($this->session->flashdata('publish_event')) : ?>
    <?php echo '<p class="alert alert-success mt-3">' .$this->session->flashdata('publish_event') . '</p>'; ?>
<?php endif; ?>
<?php if($this->session->flashdata('unpublish_event')) : ?>
    <?php echo '<p class="alert alert-success mt-3">' .$this->session->flashdata('unpublish_event') . '</p>'; ?>
<?php endif; ?>
<?php if($this->session->flashdata('delete_event')) : ?>
    <?php echo '<p class="alert alert-success mt-3">' .$this->session->flashdata('delete_event') . '</p>'; ?>
<?php endif; ?>
<style>
#button{
	margin-top:20px;
}
</style>
<a id="button" href="<?= base_url('admin/event/add')?>" class="btn btn-primary">Add New Event</a>
<hr>
<h1 class="display-4">Recently Uploaded Event</h1>
<div class="table-responsive">
	<table class="table table-striped">
		<thead>
			<th>Id</th>
			<th>Title</th>
			<th>Description</th>
			<th>venue</th>
			<th>state</th>
			<th>city</th>
			<th>day</th>
			<th>month</th>
			<th>year</th>
			<th>action</th>
		</thead>
		<tbody>
			<?php foreach($event as $events) : ?>
				<tr>
					<td><?= $events->id?></td>
					<td><?= $events->title?></td>
					<td><?= $events->description?></td>
					<td><?= $events->venue?></td>
					<td><?= $events->state?></td>
					<td><?= $events->city?></td>
					<td><?= $events->day?></td>
					<td><?= $events->month?></td>
					<td><?= $events->year?></td>
					<td>
						<a href="<?= base_url('admin/event/edit/'.$events->id.'')?>" class="btn btn-primary">Edit</a>
						<?php if($events->is_publish == 1) : ?>
							<a href="<?= base_url('admin/event/unpublish/'.$events->id.'')?>" class="btn btn-warning">Unpublish</a>	
						<?php elseif($events->is_publish == 0) : ?>
							<a href="<?= base_url('admin/event/publish/'.$events->id.'')?>" class="btn btn-success">Publish</a>	
						<?php endif; ?>
						<a href="<?= base_url('admin/event/delete/'.$events->id.'')?>" class="btn btn-danger">Delete</a>
					</td>
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>
</div>